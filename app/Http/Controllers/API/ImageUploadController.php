<?php

namespace App\Http\Controllers\API;

use App\Models\Image;
use App\Http\Controllers\Controller;

class ImageUploadController extends Controller
{
    public function index()
    {
        try {
            $images = Image::all();
            return successResponse('Images fetched successfully', $images);
        } catch (\Throwable $th) {
            return errorResponse('Action Failed', $th->getMessage());
        }
    }
}
