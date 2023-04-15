<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactFormRequest;
use App\Models\Contact;
Use App\Mail\SendContactEmail;
Use App\Mail\SendContactAdminEmail;

class ContactController extends Controller
{
    public function contact()
    {
        return view('pages/contact');
    }

    public function mailContactForm(ContactFormRequest $request)
    {
        //Store data in database
        Contact::create($request->all());

        $data = array(
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message'   =>   $request->message
        );

        Mail::to($request->email)->send(new SendContactEmail($data));
        Mail::to('ebenezer.babalola@ss-limited.com')->send(new SendContactAdminEmail($data));

        return redirect('contact')->with('status', 'Thanks for your message! We will get back to you soon!');

    }

}
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 