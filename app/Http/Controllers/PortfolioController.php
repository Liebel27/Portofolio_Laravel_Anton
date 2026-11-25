<?php

namespace App\Http\Controllers;

class PortfolioController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function service()
    {
        return view('pages.service');
    }

    public function skills()
    {
        return view('pages.skills');
    }

    public function education()
    {
        return view('pages.education');
    }

    public function contact()
    {
        return view('pages.contact');
    }
}
