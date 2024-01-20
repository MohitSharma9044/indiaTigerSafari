<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin\AboutUs;
use App\Models\Admin\ContactUs;
use App\Models\Admin\JeepSafari;
use App\Models\Admin\PayNow;
use App\Models\Admin\PrivacyPolicy;
use App\Models\Admin\TermsAndCondition;

class HomeController extends Controller
{
    public function index()
    {
        $about = AboutUs::with('descriptions')->first();
        return view('home', compact('about'));
    }
    public function aboutUs()
    {
        $about = AboutUs::with('descriptions')->first();
        return view('about-us', compact('about'));
    }

    public function ourPackage()
    {
        return view('our-package'); 
    }

    public function contactUs()
    {
        $contact = ContactUs::first();
        return view('contact-us', compact('contact'));
    }

    public function payNow()
    {
        $pay_now = PayNow::first();
        return view('pay-now', compact('pay_now'));
    }

    public function termsAndCondition()
    {
        $terms = TermsAndCondition::with('titles', 'titles.descriptions')->first();
        return view('terms-and-condition', compact('terms'));
    }

    public function privacyPolicy()
    {
        $privacy = PrivacyPolicy::with('titles', 'titles.descriptions')->first();
        return view('privacy-policy', compact('privacy'));
    }

    public function jeepSafari()
    {
        $jeep = JeepSafari::with('titles', 'titles.descriptions')->first();
        return view('jeep-safari', compact('jeep'));
    }
}
