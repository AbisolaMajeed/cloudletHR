<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\NewsletterSubscriber;

class AdminNewsletterSubscriberController extends Controller
{
    
    public function viewNewsLetterSubscriber()
    {
        $newsletter_subscribers = NewsletterSubscriber::all();
        return view('pages.admin.newsletter.view-subscribers', compact('newsletter_subscribers'));
    }
}
