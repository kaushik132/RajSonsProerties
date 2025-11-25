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

}
