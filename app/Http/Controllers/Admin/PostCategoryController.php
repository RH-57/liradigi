<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PostCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;

class PostCategoryController extends Controller
{
    private function clearCache() {
        Cache::forget('all_post_categories');
    }
    public function index() {
        $post_categories = Cache::remember('all_post_categories', 600, function() {
            return PostCategory::get();
        });

        return view('admins.posts.categories.index', compact('post_categories'));
    }

    public function create() {
        return view('admins.posts.categories.create');
    }

    public function store(Request $request) {
        $request->validate([
            'name'          => 'required|string|max:50',
            'slug'          => 'nullable|string|max:100|unique:post_categories,slug',
            'description'   => 'nullable|string',
        ]);

        $slug = $request->slug ? Str::slug($request->slug) : Str::slug($request->name);

        PostCategory::create([
            'name'          => $request->name,
            'slug'          => $slug,
            'description'   => $request->description,
        ]);

        $this->clearCache();

        return redirect()->route('posts.categories.index')->with('success', 'Post Category Created Successfully');
    }

    public function edit($id) {
        $post_category = PostCategory::findOrFail($id);

        return view('admins.posts.categories.edit', compact('post_category'));
    }

    public function update(Request $request, $id) {
        $post_category = PostCategory::findOrFail($id);

        $request->validate([
            'name'          => 'required|string|max:50',
            'slug'          => 'nullable|string|max:100|unique:post_categories,slug',
            'description'   => 'nullable|string',
        ]);

        $slugNew = $request->slug ? Str::slug($request->slug) : Str::slug($request->name);
        if (PostCategory::where('slug', $slugNew)->where('id', '!=', $post_category->id)->exists()) {
            $slugNew .= '-' . time();
        }

        $post_category->update([
            'name'          => $request->name,
            'slug'          => $slugNew,
            'description'   => $request->description,
        ]);

        $this->clearCache();

        return redirect()->route('posts.categories.edit', $post_category->id)->with('success', 'Post Category Updated Successfully');
    }

    public function destroy($id) {
        $post_category = PostCategory::findOrFail($id);
        $post_category->delete();
        $this->clearCache();

        return redirect()->route('posts.categories.index')->with('success', 'Post Category Deleted Successfully');
    }
}
