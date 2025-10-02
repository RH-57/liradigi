<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Mail\MessageMail;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;

class MessageController extends Controller
{
    public function store(Request $request) {
        $request->validate([
            'name'      => 'required|string|max:50',
            'email'     => 'required|email',
            'subject'   => 'required|string|max:255',
            'message'   => 'required|string',
            'g-recaptcha-response' => 'required',
        ]);

        $response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
            'secret'   => config('services.recaptcha.secret_key'),
            'response' => $request->input('g-recaptcha-response'),
            'remoteip' => $request->ip(),
        ]);

        $result = $response->json();


        if (!($result['success'] ?? false) || ($result['score'] ?? 0) < 0.5) {
            return back()->withErrors(['g-recaptcha-response' => 'Verifikasi reCAPTCHA gagal, coba lagi.'])->withInput();
        }

        Message::create([
            'name'      => $request->name,
            'email'      => $request->email,
            'subject'      => $request->subject,
            'message'      => $request->message,
        ]);

        return back()->with('success', 'Pesan Berhasil Dikirim');
    }
}
