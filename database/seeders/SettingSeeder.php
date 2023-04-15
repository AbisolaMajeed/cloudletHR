<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $settings = array(
            [
              "name" => "CloudletHr",
              "email" => "cloudlethr@limited.com",
              "phone_number" => "+23401-2932127\n\n+234(81)47307880",
              "company_logo" => "https://res.cloudinary.com/dvhfyuilj/image/upload/v1676637757/fmr4dabcrgw71styp7c4.png",
              "company_address" => "16A Residents Road, Gbagada Phase II, Lagos",
              "about_company" => "CloudletHR | HRMS is a secure cloud hosted platform 
              used to manage human resources and related processes throughout the employee 
              lifecycle. It combines all the functions of a complete enterprise level human
               resource team into a number of modules."
            ]
        );
        for($i = 0; $i < count($settings); $i++)
        {
            Setting::updateOrCreate(["email" => $settings[$i]['email']],
            [
                "name" => $settings[$i]["name"],
                "email" => $settings[$i]["email"],
                "phone_number" => $settings[$i]["phone_number"],
                "company_logo" => $settings[$i]["company_logo"],
                "company_address" => $settings[$i]["company_address"],
                "about_company" => $settings[$i]["about_company"],
            ]);
        }
    }
}
