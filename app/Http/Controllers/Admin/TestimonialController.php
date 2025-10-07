<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Storage;

class TestimonialController extends Controller
{
     private function clearCache() {
        $page = request('page', 1);
        Cache::forget("testimonials_page_{$page}");
    }

    public function index()
    {
        $page = request('page', 1); // ambil nomor halaman dari query string (?page=2, dst.)

        $testimonials = Cache::remember("testimonials_page_{$page}", 3600, function () {
            return Testimonial::orderBy('created_at', 'desc')->paginate(10);
        });

        return view('admins.testimonials.index', compact('testimonials'));
    }


    public function create() {
        return view('admins.testimonials.create');
    }

    public function store(Request $request) {
        $request->validate([
            'name'          => 'required|string|max:50',
            'position'      => 'required|string|max:100',
            'testimonial'   => 'required|string|min:3',
            'rating'        => 'required|integer|min:1|min:5',
            'image'         => 'required|image|mimes:jpeg,jpg,png|max:2048',
        ]);

        $imagePath = null;
        if($request->hasFIle('image')) {
            $imagePath = $request->file('image')->store('testimonials/images', 'public');
        }

        Testimonial::create([
            'name'          => $request->name,
            'position'      => $request->position,
            'testimonial'   => $request->testimonial,
            'rating'        => $request->rating,
            'image'         => $imagePath
        ]);

        $this->clearCache();

        return redirect()->route('testimonials.index')->with('success','Testimonial Added Successfully');
    }

    public function edit($id) {
        $testimonials = Testimonial::findOrFail($id);

        return view('admins.testimonials.edit', compact('testimonials'));
    }

    public function update(Request $request, $id) {
        $testimonial = Testimonial::findOrFail($id);

        $request->validate([
            'name'        => 'required|string|max:50',
            'position'    => 'required|string|max:100',
            'testimonial' => 'required|string|min:3',
            'rating'      => 'required|integer|min:1|max:5',
            'image'       => 'nullable|image|mimes:jpeg,jpg,png|max:2048',
        ]);

        $imagePath = $testimonial->image;

        if ($request->hasFile('image')) {
            // hapus gambar lama kalau ada
            if ($testimonial->image && Storage::disk('public')->exists($testimonial->image)) {
                Storage::disk('public')->delete($testimonial->image);
            }

            // upload gambar baru
            $imagePath = $request->file('image')->store('testimonials/images', 'public');
        }

        $testimonial->update([
            'name'        => $request->name,
            'position'    => $request->position,
            'testimonial' => $request->testimonial,
            'rating'      => $request->rating,
            'image'       => $imagePath,
        ]);

        $this->clearCache();

        return redirect()->route('testimonials.index')->with('success', 'Testimonial Updated Successfully');
    }

    public function destroy($id)
    {
        $testimonial = Testimonial::findOrFail($id);

        // hapus gambar dari storage kalau ada
        if ($testimonial->image && Storage::disk('public')->exists($testimonial->image)) {
            Storage::disk('public')->delete($testimonial->image);
        }

        $testimonial->delete();

        $this->clearCache();

        return redirect()->route('testimonials.index')->with('success', 'Testimonial Deleted Successfully');
    }
}
