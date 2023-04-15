<?php

namespace App\Http\Controllers\Admin;

use App\Models\Image;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ImageUploadRequest;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;

class AdminImageUploadController extends Controller
{
    public function viewImage()
    {
        $images = Image::paginate(8);
        return view('pages.admin.gallery.image.view', compact('images'));
    }

    public function uploadImage()
    {
        return view('pages.admin.gallery.image.upload-image');
    }

    public function storeImage(ImageUploadRequest $request)
    {       
        $image_url = Cloudinary::upload($request->file('image_url')->getRealPath())->getSecurePath();

        $image = new Image();
        $image->image_tag = $request->image_tag;
        $image->image_url = $image_url;
 
        $image->save();

        return redirect('dashboard/gallery/image/view')->with('success', 'Image uploaded successfully');
    }

    public function deleteImage($id)
    {
        $image = Image::where('id', $id)->delete();
        return redirect('dashboard/gallery/image/view')->with('success', 'Image deleted successfully');
    }
}
