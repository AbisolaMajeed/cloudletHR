<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        return view('pages/index');
    }

    public function  viewDemo()
    {
        return view('partials/demo-video');
    }

    public function apiTest()
    {
        return 1;
        // return array('January' => [1000, 400]);
    }
}
