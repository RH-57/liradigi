<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Faq;
use App\Models\MediaSocial;
use App\Models\Project;
use App\Models\Service;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        $contacts = Contact::first();
        $medsos = MediaSocial::get();
        $projects = Project::with('images')->limit(3)->get();
        $testimonials = Testimonial::latest()->take(5)->get();
        $services = Service::get();
        $faqs = Faq::where('is_active', 1)->orderBy('order')->get();

        return view('web.home.index', compact(
            'contacts',
            'medsos',
            'projects',
            'testimonials',
            'services',
            'faqs',
        ));
    }
}
