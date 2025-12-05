<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ServiceCategory;
use App\Models\ServiceSubCategory;
use App\Models\Service;
use App\Models\Features;
use COM;

class HomeController extends Controller
{
    public function index()
    {
        $serviceCategories = ServiceCategory::all();
        $subserviceCategories = ServiceSubCategory::all();
        $properties = Service::latest()->limit(8)->get();

        return view('index', compact('serviceCategories', 'subserviceCategories', 'properties'));
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


    public function service($slug = null)
    {
        if ($slug != null) {

            $serviceCategory = ServiceCategory::where('slug', $slug)->first();
            $servicesList = Service::latest()->with('serviceCategory')->where('category_id', $serviceCategory->id)->paginate(6);
        } else {
            $servicesList = Service::latest()->with('serviceCategory')->paginate(6);
        }

        return view('service', compact('servicesList'));
    }


    public function serviceDetail($slug = null)
    {
        $servicesData = Service::where('slug', $slug)->first();

        if ($servicesData && is_array($servicesData->itinerary)) {
            $features = Features::whereIn('id', $servicesData->itinerary)->get();
        } else {
            $features = collect();
        }

        return view('service-detail', compact('servicesData', 'features'));
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
