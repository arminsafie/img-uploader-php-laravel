<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;

class ImageController extends Controller
{
    public function uploadForm()
    {
        return view('upload');
    }

    public function uploadSubmit(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $image = $request->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->storeAs('public/images', $imageName);

        // Debugging statement
        // \Log::info('File path: ' . $imageName);

        $imageModel = new Image();
        $imageModel->filename = 'storage/images/' . $imageName;
        $imageModel->save();

        // Debugging statement
        // \Log::info('Image saved: ' . $imageModel->id);

        return back()->with('success', 'Image uploaded successfully.');
    }
}
