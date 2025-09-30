<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Mail\MessageMail;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MessageController extends Controller
{
    public function store(Request $request) {
        $request->validate([
            'name'      => 'required|string|max:50',
            'email'     => 'required|email',
            'subject'   => 'required|string|max:255',
            'message'   => 'required|string'
        ]);

        $message = Message::create([
            'name'      => $request->name,
            'email'      => $request->email,
            'subject'      => $request->subject,
            'message'      => $request->message,
        ]);

        return back()->with('success', 'Pesan Berhasil Dikirim');
    }
}
