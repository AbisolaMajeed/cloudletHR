<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use App\Http\Controllers\Controller;
use App\Http\Requests\FeedbackFormRequest;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;

class FeedbackController extends Controller
{
    public function feedback()
    {
        return view('pages.feedback');
    }

    public function mailFeedbackForm(FeedbackFormRequest $request)
    {
        // if($request->hasFile('image')) {
        //     $file = $request->file('image');
        //     $file_extension = $file->getClientOriginalName();
        //     $destination_path = public_path('img') . '/feedback';
        //     $filename = "img/feedback/". $file_extension;
        //     $request->file('image')->move($destination_path, $filename);
        //     $feedback['image'] = $filename;
        if($request->hasFile('image')) {
            $filename = Cloudinary::upload($request->file('image')->getRealPath())->getSecurePath();

            $feedback = array(
                'name' => $request->name,
                'email' => $request->email,
                'company_name' => $request->company_name,
                'subject' => $request->subject,
                'image' => $filename,
                'message' => $request->message
            );
        } else {
            $feedback = array(
                'name' => $request->name,
                'email' => $request->email,
                'company_name' => $request->company_name,
                'subject' => $request->subject,
                'message' => $request->message
            );
        }
           
        // Store data in databbase
        Feedback::create($feedback);
        
        return redirect('feedback')->with('status', 'Thanks for your candid review!');
    }

    public function viewFeedback()
    {
        return view('pages.admin.view-feedback');
    }
}
