<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Feedback;

class FeedbackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $feedbacks = array(
            [
              "name" => "Jean Doe",
              "email" => "jeandoe@ss-limited.com",
              "company_name" => "Soft Solutions Limited",
              "subject" => "Review",
              "image" => "https://res.cloudinary.com/dvhfyuilj/image/upload/v1676714594/uvr9uf6rliowqofttorg.png",
              "message" => "It was an easy setup, easy implementation, and our employees love the ease
              of use. We have gotten remarkable feedback from our new hires on how efficient our
              onboarding is now that we have CloudletHR."
            ],
            [
              "name" => "Johan Smith",
              "email" => "hohansmith@fidson-plc.com",
              "company_name" => "Fidson Healthcare Plc",
              "subject" => "Review",
              "image" => "https://res.cloudinary.com/dvhfyuilj/image/upload/v1676635016/fa4p3dgo4p60fi7zz9ci.jpg",
              "message"  => "Easy to get started, and the free trial is a good idea if you're on the
              fence about it. CloudletHR is a time-saver, and can help you spend more time on other,
              more important tasks."
            ],
            [
              "name" => "Jean Thunberg",
              "email" => "jeanthunberg@molcom-limited.com",
              "company_name" => "Molcom Multi-Concepts Limited",
              "subject" => "Review",
              "image" => "https://res.cloudinary.com/dvhfyuilj/image/upload/v1676714594/uvr9uf6rliowqofttorg.png",
              "message"  => "CloudletHR Helped in better managing leaves and payroll,
              it offers a free version, which can be used to test if it suits the
              specific organization, I specifically like the Payroll Management feature."
            ],
            [
              "name" => "Jean Doe",
              "email" => "jeandoe@ss-limited.com",
              "company_name" => "Soft Solutions Limited",
              "subject" => "Review",
              "image" => "https://res.cloudinary.com/dvhfyuilj/image/upload/v1676634659/b5x40dlkcsik5zzcblxk.jpg",
              "message" => "It was an easy setup, easy implementation, and our employees love the ease
              of use. We have gotten remarkable feedback from our new hires on how efficient our
              onboarding is now that we have CloudletHR."
            ],
            [
              "name" => "Johan Smith",
              "email" => "hohansmith@fidson-plc.com",
              "company_name" => "Fidson Healthcare Plc",
              "subject" => "Review",
              "image" => "https://res.cloudinary.com/dvhfyuilj/image/upload/v1676714594/uvr9uf6rliowqofttorg.jpg",
              "message"  => "Easy to get started, and the free trial is a good idea if you're on the
              fence about it. CloudletHR is a time-saver, and can help you spend more time on other,
              more important tasks."
            ],
            [
              "name" => "Jean Thunberg",
              "email" => "jeanthunberg@molcom-limited.com",
              "company_name" => "Molcom Multi-Concepts Enterprise",
              "subject" => "Review",
              "image" => "https://res.cloudinary.com/dvhfyuilj/image/upload/v1676634659/b5x40dlkcsik5zzcblxk.jpg",
              "message"  => "CloudletHR Helped in better managing leaves and payroll,
              it offers a free version, which can be used to test if it suits the
              specific organization, I specifically like the Payroll Management feature."
            ],
            [
              "name" => "Jean Doe",
              "email" => "jeandoe@ss-limited.com",
              "company_name" => "Soft Solutions Enterprise",
              "subject" => "Review",
              "image" => "https://res.cloudinary.com/dvhfyuilj/image/upload/v1676634659/b5x40dlkcsik5zzcblxk.jpg",
              "message" => "It was an easy setup, easy implementation, and our employees love the ease
              of use. We have gotten remarkable feedback from our new hires on how efficient our
              onboarding is now that we have CloudletHR."
            ],
            [
              "name" => "Johan Smith",
              "email" => "hohansmith@fidson-plc.com",
              "company_name" => "Fidson Healthcare Limited",
              "subject" => "Review",
              "image" => "https://res.cloudinary.com/dvhfyuilj/image/upload/v1676714594/uvr9uf6rliowqofttorg.png",
              "message"  => "Easy to get started, and the free trial is a good idea if you're on the
              fence about it. CloudletHR is a time-saver, and can help you spend more time on other,
              more important tasks."
            ],
            [
              "name" => "Jean Thunberg",
              "email" => "jeanthunberg@molcom-limited.com",
              "company_name" => "Molcom Multi-Concepts Institution",
              "subject" => "Review",
              "image" => "https://res.cloudinary.com/dvhfyuilj/image/upload/v1676635016/fa4p3dgo4p60fi7zz9ci.jpg",
              "message"  => "CloudletHR Helped in better managing leaves and payroll,
              it offers a free version, which can be used to test if it suits the
              specific organization, I specifically like the Payroll Management feature."
            ]
        );

        for($i=0; $i < count($feedbacks); $i++)
        {
            Feedback::updateOrCreate(["company_name" => $feedbacks[$i]["company_name"]],
            [
                "name" =>  $feedbacks[$i]["name"],
                "email" =>  $feedbacks[$i]["email"],
                "company_name" => $feedbacks[$i]["company_name"],
                "subject" =>  $feedbacks[$i]["subject"],
                "image" =>  $feedbacks[$i]["image"],
                "message" =>  $feedbacks[$i]["message"],
            ]);
        }
    }
}
