<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index() {
        $photos = Gallery::latest()->paginate(12);
        return view('gallery.index', compact('photos'));
    }

    // Admin
    public function adminIndex() {
        $photos = Gallery::latest()->paginate(12);
        return view('admin.gallery.index', compact('photos'));
    }

    public function create() { return view('admin.gallery.create'); }
    public function store(Request $request) {
        $data = $request->validate([
            'title'=>'nullable|string',
            'image'=>'required|image|max:2048'
        ]);
        $data['image'] = $request->file('image')->store('gallery','public');
        Gallery::create($data);
        return redirect()->route('admin.gallery.index')->with('success','Photo added');
    }
    public function destroy(Gallery $gallery) {
        $gallery->delete();
        return back()->with('success','Photo deleted');
    }
}
