<?php

namespace App\Http\Controllers\Admin;

use App\Models\Post;
use App\Models\PostCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;

class PostController
{
    private function clearCache() {
        Cache::forget('dashboard_posts_count');
        for ($i = 1; $i <= 10; $i++) {
            Cache::forget("posts_page_{$i}");
        }
    }

    public function index() {
        $page = request('page', 1);
        $cacheKey = "posts_page_{$page}";

        $posts = Cache::remember($cacheKey, 3600, function() {
            return Post::with(['user', 'category'])->latest()->paginate(10);
        });

        return view('admins.posts.index', compact('posts'));
    }

    public function show($id)
    {
        $post = Post::with(['user', 'category'])->findOrFail($id);

        $sessionKey = 'viewed_post_' . $post->id;
        if (!session()->has($sessionKey)) {
            $post->increment('views');
            session()->put($sessionKey, true);
        }

        return view('admins.posts.show', compact('post'));
    }

    public function create(){
        $categories = Cache::remember('all_post_categories', 600, function() {
            return PostCategory::get();
        });

        return view('admins.posts.create', compact('categories'));
    }

    public function uploadImage(Request $request)
    {
        if ($request->hasFile('upload')) {
            $file = $request->file('upload');

            // buat nama unik biar nggak tabrakan
            $filename = time() . '_' . preg_replace('/\s+/', '_', $file->getClientOriginalName());

            // simpan ke storage/app/public/posts/images
            $file->storeAs('posts/images', $filename, 'public');

            // ambil URL publik
            $url = asset('storage/posts/images/' . $filename);

            // CKEditor 5 EXPECTS "uploaded" + "url"
            return response()->json([
                'uploaded' => true,
                'url' => $url
            ]);
        }

        return response()->json([
            'uploaded' => false,
            'error' => [
                'message' => 'No file uploaded.'
            ]
        ], 400);
    }


    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'title'            => 'required|string|max:255',
            'post_category_id' => 'required|exists:post_categories,id',
            'featured_image'   => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'content'          => 'required|string',
            'status'           => 'required|in:draft,published',
            'meta_title'       => 'nullable|string|max:255',
            'meta_description' => 'nullable|string|max:500',
            'meta_keyword'     => 'nullable|string|max:255',
            'meta_image'       => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'canonical_url'     => 'nullable|url|max:255',
        ]);

        // Generate slug unik
        $slug = Str::slug($request->title) . '-' . time();

        // Simpan featured image (kalau ada)
        $imagePath = null;
        if ($request->hasFile('featured_image')) {
            $imagePath = $request->file('featured_image')->store('posts/featured', 'public');
        }

        $metaPath = null;
        if ($request->hasFile('meta_image')) {
            $metaPath = $request->file('meta_image')->store('posts/meta', 'public');
        }

        $canonicalUrl = url('posts/' . $slug);

        // Buat data array
        $data = [
            'title'            => $request->title,
            'slug'             => $slug,
            'post_category_id' => $request->post_category_id,
            'content'          => $request->content,
            'status'           => $request->status,
            'meta_title'       => $request->meta_title,
            'meta_description' => $request->meta_description,
            'meta_keyword'     => $request->meta_keyword,
            'user_id'          => Auth::id(),
            'featured_image'   => $imagePath,
            'meta_image'        => $metaPath,
            'canonical_url'     => $canonicalUrl
        ];

        // Kalau status published, set published_at
        if ($request->status === 'published') {
            $data['published_at'] = now();
        }

        // Simpan ke database
        Post::create($data);

        $this->clearCache();

        return redirect()->route('posts.index')->with('success', 'Post berhasil dibuat.');
    }


    public function edit(Post $post)
    {
        $categories = PostCategory::all();
        return view('admins.posts.edit', compact('post', 'categories'));
    }

    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title'             => 'required|string|max:255',
            'slug'              => 'nullable|string|max:255|unique:posts,slug,' . $post->id,
            'post_category_id'  => 'required|exists:post_categories,id',
            'content'           => 'required',
            'featured_image'    => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'meta_title'        => 'nullable|string|max:255',
            'meta_description'  => 'nullable|string',
            'meta_keyword'      => 'nullable|string',
            'meta_image'        => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'status'            => 'required|in:draft,published',
        ]);

        // update featured image jika ada upload baru
        if ($request->hasFile('featured_image')) {
            // hapus yang lama
            if ($post->featured_image && Storage::disk('public')->exists($post->featured_image)) {
                Storage::disk('public')->delete($post->featured_image);
            }

            $path = $request->file('featured_image')->store('posts/featured', 'public');
            $post->featured_image = $path;
        }

        if ($request->hasFile('meta_image')) {
            if ($post->meta_image && Storage::disk('public')->exists($post->meta_image)) {
                Storage::disk('public')->delete($post->meta_image);
            }
            $post->meta_image = $request->file('meta_image')->store('posts/meta', 'public');
        }

        $slugNew = $request->slug ? Str::slug($request->slug) : Str::slug($request->title);
            if (Post::where('slug', $slugNew)->where('id', '!=', $post->id)->exists()) {
                $slugNew .= '-' . time();
            }

        $canonicalUrl = $request->canonical_url ?: url('posts/' . $slugNew);

        // update field lain
        $post->update([
            'title'             => $request->title,
            'slug'              => $slugNew,
            'post_category_id'  => $request->post_category_id,
            'content'           => $request->content,
            'meta_title'        => $request->meta_title,
            'meta_description'  => $request->meta_description,
            'meta_keyword'      => $request->meta_keyword,
            'meta_image'       => $post->meta_image,
            'status'            => $request->status,
            'canonical_url'     => $canonicalUrl,
            'published_at'      => $request->status === 'published' ? now() : null,
        ]);

        $this->clearCache();

        return redirect()->route('posts.show', $post->id)->with('success', 'Post updated successfully!');
    }


    public function destroy(Post $post)
    {
       // Soft delete hanya hapus dari database (set deleted_at)

    $post->delete();

    $this->clearCache();

    return redirect()->route('posts.index')->with('success', 'Post moved to trash!');
    }
}
