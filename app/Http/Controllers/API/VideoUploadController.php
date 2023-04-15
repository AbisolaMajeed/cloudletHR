<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Video;
use Illuminate\Http\Request;

class VideoUploadController extends Controller
{
    public function index()
    {
        try {
            $videos = Video::all();
            return successResponse('Videos fetched successfully', $videos);
        } catch (\Throwable $th) {
            return errorResponse('Action Failed', $th->getMessage());
        }
    }
}
