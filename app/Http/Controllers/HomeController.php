<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function ContactUs()
    {
        return view('contact');
    }

    public function blog()
    {
        return view('blog');
    }

    public function blogDetail()
    {
        return view('blog-detail');
    }


    public function service()
    {
        return view('service');
    }


    public function serviceDetail()
    {
        return view('service-detail');
    }







    // login functions
    public function forgot()
    {
        return view('forgot');
    }

    public function setNewPass()
    {
        return view('set-new-pass');
    }



    public function login()
    {
        return view('login');
    }

    public function register()
    {
        return view('signup');
    }

    public function varificationCode()
    {
        return view('varification-code');
    }

}
