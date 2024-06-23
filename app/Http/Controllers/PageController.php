<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{

    public function index()
    {
        return view('index');
    }

    public function services()
    {
        return view('service');
    }

    public function sdatails()
    {
        return view('serviceDetails');
    }

    public function about()
    {
        return view('about');
    }

//    public function card()
//    {
//        return view('products.card');
//    }

//    public function product()
//    {
//        return view('products');
//    }

    public function projects()
    {
        return view('projects');
    }

    public function projectDetails()
    {
        return view('projectDetails');
    }

    public function contact()
    {
        return view('contact');
    }



}
