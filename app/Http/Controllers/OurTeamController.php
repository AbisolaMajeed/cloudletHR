<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\Image;
use App\Http\Controllers\Controller;
class OurTeamController extends Controller
{
    public function ourTeam()
    {
        $images = Image::where('image_url','https://res.cloudinary.com/dvhfyuilj/image/upload/v1677074351/unpqsoitb6ixqiqb6ywi.png')->get();
        return view('pages/our-team', compact('images'));
    }
}
