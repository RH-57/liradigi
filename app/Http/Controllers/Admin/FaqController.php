<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class FaqController extends Controller
{
    private function clearCache() {
        Cache::forget('all_faqs');
    }

    public function index() {
        $faqs = Cache::remember('all_faqs', 3600, function() {
            return Faq::orderBy('order')->get();
        });

        return view('admins.faqs.index', compact('faqs'));
    }

    public function create() {
        return view('admins.faqs.create');
    }

    public function store(Request $request) {
        $request->validate([
            'question'  => 'required|string|max:255',
            'answer'    => 'required|string',
            'order'     => 'nullable|integer|min:0',
            'is_active' => 'required|boolean',
        ]);

        Faq::create([
            'question'  => $request->question,
            'answer'    => $request->answer,
            'order'     => $request->order,
            'is_active' => $request->is_active,
        ]);

        $this->clearCache();

        return redirect()->route('faqs.index')->with('success', 'Faqs Added Successfully');
    }

    public function show($id) {
        $faq = Faq::findOrFail($id);

        return view('admins.faqs.show', compact('faq'));
    }

    public function edit($id) {
        $faq = Faq::findOrFail($id);

        return view('admins.faqs.edit', compact('faq'));
    }

    public function update(Request $request, $id) {
        $faq = Faq::findOrFail($id);

        $request->validate([
            'question'  => 'required|string|max:255',
            'answer'    => 'required|string',
            'order'     => 'nullable|integer|min:0',
            'is_active' => 'required|boolean',
        ]);

        $faq->update([
            'question'  => $request->question,
            'answer'    => $request->answer,
            'order'     => $request->order,
            'is_active' => $request->is_active,
        ]);

        $this->clearCache();

        return redirect()->route('faqs.index')->with(['success' => 'Faqs Updated Successfully']);
    }

    public function destroy($id) {
        $faq = Faq::findOrFail($id);
        $faq->delete();

        $this->clearCache();

        return redirect()->route('faqs.index')->with(['success' => 'FAQ deleted successfully']);
    }
}
