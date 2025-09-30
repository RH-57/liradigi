<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\MediaSocial;
use App\Models\Project;
use App\Models\Service;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index() {
        $projects = Project::get();
        $contacts = Contact::first();
        $services = Service::get();
        $medsos = MediaSocial::get();

        return view('web.projects.index', compact('projects', 'contacts', 'services', 'medsos'));
    }

    public function show($slug) {
        $project = Project::where('slug', $slug)->with('images')->firstOrFail();
        $contacts = Contact::first();
        $services = Service::get();
        $medsos = MediaSocial::get();

        // Ambil project lain secara random (kecuali project yg sedang dibuka)
        $relatedProjects = Project::where('id', '!=', $project->id)
                            ->inRandomOrder()
                            ->take(3)
                            ->with('images')
                            ->get();

        return view('web.projects.detail', compact('project', 'contacts', 'services', 'medsos', 'relatedProjects'));
    }
}
