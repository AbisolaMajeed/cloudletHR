<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Faq;

class FAQsController extends Controller
{
    public function frequentlyAskedQuestions()
    {
        $faqs = Faq::all();
        
        return view('pages/frequently-asked-questions', compact('faqs'));
    }
}
