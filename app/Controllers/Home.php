<?php

namespace App\Controllers;

use App\Models\Dashboard_model;

class Home extends BaseController
{

    public function __construct()
    {
        $this->dashboard_model = new Dashboard_model();
    }

    public function index()
    {
        return view('dashboard');
    }

    public function login(){return view('auth/login');}
    public function profile(){return view('profile');}
    public function faq(){return view('faq');}
    public function blank(){return view('blank');}
    public function notfound(){return view('404');}
    public function register(){return view('auth/register');}
    public function contact(){return view('contact');}
    public function pusatBantuan(){return view('pusat_bantuan');}
}
