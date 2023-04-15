<?php

namespace Database\Seeders;

use App\Models\Video;
use Illuminate\Database\Seeder;

class VideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $videos = array(
            [
                "video_tag" => "Module Demo Video",
                "video_url" => "https://res.cloudinary.com/dvhfyuilj/video/upload/v1676297861/jt9ggeugnm89eabokdmv.mp4"
            ],
            [
                "video_tag" => "App Demo Video",
                "video_url" => "https://res.cloudinary.com/dvhfyuilj/video/upload/v1676297771/d2fsh9hzwh5rqy6bjeqh.mp4"
            ]
        );
        for($i = 0; $i < count($videos); $i++)
        {
            Video::updateOrCreate(["video_tag" => $videos[$i]['video_tag']],
            [
                "video_tag" => $videos[$i]["video_tag"],
                "video_url" => $videos[$i]["video_url"]
            ]);
        }
    }
}
