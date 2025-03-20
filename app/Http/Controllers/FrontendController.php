<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        return view('home.index');
    }

    public function service(){
        return view('home.service');
    }

    public function about(){
        return view('home.about.about');
    }

    public function founder(){
        return view('home.about.founder');
    }

    public function blog(){
        return view('home.blog.blog');
    }

    public function blogDetails(){
        return view('home.blog.blogDetails');
    }

    public function contact(){
        return view('home.contact');
    }

    public function gallery(){
        return view('home.gallery');
    }

    public function workshops(){
        return view('home.workshops');
    }

    public function booking(){
        return view('home.booking');
    }
}
