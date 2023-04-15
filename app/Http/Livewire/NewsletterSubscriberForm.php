<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\NewsletterSubscriber;

class NewsletterSubscriberForm extends Component
{
    public $email;
    public $status = false;

    // public function search()
    // {
    //     $this->email = 123;
    // }

    public function submit()
    {
        $newsletter_subscriber = $this->validate([
            'email' => 'required|email|unique:newsletter_subscribers',
        ]);
        NewsletterSubscriber::create($newsletter_subscriber);
        $this->status = true;
        $this->email = null;
        // return back()->with('success', 'Email added successfully');
    }

    public function render()
    {
        return view('livewire.newsletter-subscriber-form');
    }
}
