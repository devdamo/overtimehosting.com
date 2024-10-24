<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function termsOfService()
    {
        return view('pages.terms-of-service');
    }

    public function privacyPolicy()
    {
        return view('pages.privacy-policy');
    }

    public function cookieNotice()
    {
        return view('pages.cookie-notice');
    }

    public function features()
    {
        return view('pages.features');
    }

    public function cardpayments()
    {
        return view('pages.CardPayments');
    }
}
