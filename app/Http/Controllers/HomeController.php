<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Mail;
use Session;
use Redirect;

class HomeController extends Controller
{
    function about()
    {
        return view('about');
    }
    function layanan()
    {
        return view('layanan');
    }
    function profil()
    {
        return view('profil');
    }
    function klien()
    {
        return view('klien');
    }
    function galery()
    {
        return view('galery');
    }
    public function contact()
    {
        return view('contact');
    }
    function testimonial()
    {
        return view('testimonial');
    }

}
