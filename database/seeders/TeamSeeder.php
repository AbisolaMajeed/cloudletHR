<?php

namespace Database\Seeders;

use App\Models\Team;
use Illuminate\Database\Seeder;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $teams = array(
            [
                "name" => "Tijani Bello",
                "position" => "Team Lead",
                "image" => "https://res.cloudinary.com/dvhfyuilj/image/upload/v1676625781/estojtmphvfgmt6s6gif.jpg"
            ],
            [
                "name" => "Idaneye Daniel",
                "position" => "Project Manager",
                "image" => "https://res.cloudinary.com/dvhfyuilj/image/upload/v1676714594/uvr9uf6rliowqofttorg.png"
            ],
            [
                "name" => "Wilson Goodness",
                "position" => "Customer Service Representative",
                "image" => "https://res.cloudinary.com/dvhfyuilj/image/upload/v1676635033/qc2wyjzybfm2l3e1x8ri.jpg"
            ],
            [
                "name" => "Adesanya Taiwo",
                "position" => "Development Manager",
                "image" => "https://res.cloudinary.com/dvhfyuilj/image/upload/v1676645136/efuosi0vgbwnm3cz15wd.jpg"
            ],
            [
                "name" => "Thomas James",
                "position" => "Senior Developer",
                "image" => "https://res.cloudinary.com/dvhfyuilj/image/upload/v1676714499/pvodujxmcv8tt4lkazmr.png"
            ],
            [
                "name" => "Anthony Bella",
                "position" => "Graphics Designer",
                "image" => "https://res.cloudinary.com/dvhfyuilj/image/upload/v1676625781/estojtmphvfgmt6s6gif.jpg"
            ],
        );

        for($i=0; $i < count($teams); $i++) {
            Team::updateOrCreate(["name" => $teams[$i]],
            [
                "name" => $teams[$i]['name'],
                "position" => $teams[$i]['position'],
                "image" => $teams[$i]['image']
            ]);
        }
    }
}
