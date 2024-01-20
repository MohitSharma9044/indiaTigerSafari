<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }
    public function aboutUs()
    {
        return view('about-us');
    }

    public function ourPackage()
    {
        return view('our-package'); 
    }

    public function contactUs()
    {
        return view('contact-us');
    }

    public function payNow()
    {
        return view('pay-now');
    }

    public function termsAndCondition()
    {
        return view('terms-and-condition');
    }

    public function privacyPolicy()
    {
        return view('privacy-policy');
    }

    public function jeepSafari()
    {
        return view('jeep-safari');
    }
}
