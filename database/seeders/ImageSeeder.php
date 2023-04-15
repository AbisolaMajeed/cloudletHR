<?php

namespace Database\Seeders;

use App\Models\Image;
use Illuminate\Database\Seeder;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $images = array(
            [
                "image_tag" => "No record Image",
                "image_url" => "https://res.cloudinary.com/dvhfyuilj/image/upload/v1677074351/unpqsoitb6ixqiqb6ywi.png"
            ],
            [
                "image_tag" => "Blog default Image",
                "image_url" => "https://res.cloudinary.com/dvhfyuilj/image/upload/v1677075256/lewpx5oe1hul1w3dotag.jpg"
            ]
        );
        for($i = 0; $i < count($images); $i++)
        {
            Image::updateOrCreate(["image_tag" => $images[$i]['image_tag']],
            [
                "image_tag" => $images[$i]["image_tag"],
                "image_url" => $images[$i]["image_url"]
            ]);
        }
    }
}
