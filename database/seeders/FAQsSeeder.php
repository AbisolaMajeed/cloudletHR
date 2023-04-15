<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Faq;

class FAQsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $frequentlyAskedQuestions = array(
            [
                "title" => "What is CloudletHR?",
                "content" => "CloudletHR is a secure cloud hosted platform that combines all the functions of a complete
                enterprise level human resource team into a number of modules and delivers them together as
                ONE to businesses at easy to handle cost. All humunan resource processes are automated with
                accuracy and ease of access"
            ],
            [
                "title" => "How many employees can CloudletHR accomodate?",
                "content" => "There is no limitation to the number of employees that CloudletHR can accomodate."
            ],
            [
                "title" => "What modules does CloudletHR have?",
                "content" => "Reports, Human Resource, Payroll, Leave, Appraisal, Booking, Training Assessment, Recruitment,
                Disciplinary and Shift"
            ],
            [
                "title" => "Do I need any additional software or hardware to use CloudletHR?",
                "content" => "CloudletHR is a stand-alone application. All that is required to keep the application running is a
                device and internet connection."
            ],
            [
                "title" => "Can I use CloudletHR on my phone?",
                "content" => "Yes. CloudletHR is mobile responsive."
            ],
            [
                "title" => "Can employee's attendance be monitored with CloudletHR?",
                "content" => " There is a feature that allows for the management of employee's attendance. Biometric integration is
                also possible to monitor the thime in and time of staff members accurately. Accurate records are made
                available for users for efficient use."
            ],
            [
                "title" => "Can Cloudlet HR be used for performance evaluation?",
                "content" => "Use of the appraisal module allows for the efficient evaluation of performance of every employee. Detailed reports are also made available."
            ],
            [
                "title" => "How long does it take to implement CloudletHR?",
                "content" => "CloudletHR is fully implemented under a minimum of four weeks depending on the size of the client organization."
            ],
            [
                "title" => "Is CloudletHR customizable?",
                "content" => "Customization is done with ease on CloudletHR. Software engineers are readily available to implement unique customization as required by the Clients."
            ],

        );

        for($i= 0; $i < count($frequentlyAskedQuestions); $i++){
            Faq::updateOrCreate(["title" => $frequentlyAskedQuestions[$i]],
            [
                "title"              =>  $frequentlyAskedQuestions[$i]['title'],
                "content"        =>  $frequentlyAskedQuestions[$i]['content'],
            ]); 
        }
    }
}
