<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\VideoUploadRequest;
use App\Models\Video;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;

class AdminVideoUploadController extends Controller
{
    public function viewVideo()
    {
        $videos = Video::paginate(8);
        return view('pages.admin.gallery.video.view', compact('videos'));
    }

    public function uploadVideo()
    {
        return view('pages.admin.gallery.video.upload-video');
    }

    public function storeVideo(VideoUploadRequest $request)
    {
        // $video_url = Cloudinary::uploadVideo($request->file('video_url')->getRealPath())->getSecurePath();

        $video = new Video();
        $video->video_tag = $request->video_tag;
        $video->video_url = $request->video_url;
 
        $video->save();

        return redirect('dashboard/gallery/video/view')->with('success', 'Video uploaded successfully');
    }

    public function deleteVideo($id)
    {
        $video = Video::where('id', $id)->delete();
        return redirect('dashboard/gallery/video/view')->with('success', 'Video deleted successfully');
    }
}
