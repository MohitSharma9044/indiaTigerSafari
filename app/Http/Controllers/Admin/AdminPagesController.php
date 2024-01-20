<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\AboutUs;
use App\Models\Admin\ContactUs;
use App\Models\Admin\payNow;
use App\Models\Admin\TermsAndCondition;
use App\Models\Admin\PrivacyPolicy;
use App\Models\Admin\JeepSafari;

class AdminPagesController extends Controller
{
    public function aboutUs()
    {
        $about_us = AboutUs::first();
        return view('admin.about.index', compact('about_us'));
    }
    public function contactUs()
    {
        $contact_us = ContactUs::first();
        return view('admin.contact.index', compact('contact_us'));
    }
    public function payNow()
    {
        $pay_now = payNow::first();
        return view('admin.pay.index', compact('pay_now'));
    }
    public function blogs()
    {
        return view('admin.blog.index');
    }
    public function termsAndCondition()
    {
        $terms = TermsAndCondition::with('titles', 'titles.descriptions')->first();
        return view('admin.terms.index', compact('terms'));
    }
    public function privacyPolicy()
    {
        $privacy = PrivacyPolicy::with('titles', 'titles.descriptions')->first();
        return view('admin.privacy.index', compact('privacy'));
    }
    public function jeepSafari()
    {
        $jeep = JeepSafari::with('titles', 'titles.descriptions')->first();
        return view('admin.jeep.index', compact('jeep'));
    }
}
