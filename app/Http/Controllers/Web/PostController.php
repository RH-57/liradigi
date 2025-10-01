<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\MediaSocial;
use App\Models\Post;
use App\Models\Project;
use App\Models\Service;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        $projects = Project::get();
        $contacts = Contact::first();
        $services = Service::get();
        $medsos = MediaSocial::get();
        $posts = Post::withoutTrashed()->where('status', 'published')->latest()->paginate(6);

        return view('web.posts.index', compact('projects', 'contacts', 'services', 'medsos', 'posts'));
    }

    public function show($slug)
    {
         $contacts = Contact::first();
         $medsos = MediaSocial::get();
         $services = Service::get();
        $post = Post::where('slug', $slug)
                    ->with(['category'])
                    ->firstOrFail();

        $prevPost = Post::where('id', '<', $post->id)->orderBy('id', 'desc')->first();
        $nextPost = Post::where('id', '>', $post->id)->orderBy('id', 'asc')->first();
        $latestPosts = Post::latest()->where('id', '!=', $post->id)->take(6)->get();

        return view('web.posts.show', compact('post', 'prevPost', 'nextPost', 'latestPosts', 'contacts', 'medsos', 'services'));
    }
}
