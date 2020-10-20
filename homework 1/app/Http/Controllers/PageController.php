<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getHomePage()
    {
        $title = "Home Page";
        return view('home')
        ->with('test_title',$title)
        ->with('text', 'This is Home Page');
    }

    public function getContactPage()
    {
        $title = "Contact Page";
        return view('contact')
        ->with('test_title',$title)
        ->with('text', 'This is Contact Page');
    }

    public function getAboutPage()
    {
        $title = "About Page";
        return view('about')
        ->with('test_title',$title)
        ->with('text', 'This is About Page');
    }
}
