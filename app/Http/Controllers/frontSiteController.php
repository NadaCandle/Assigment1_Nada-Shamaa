<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class frontSiteController extends Controller
{
    public function showHome(){
        return view('frontSite.index');
    }
    public function showAbout(){
        return view('frontSite.about');
    }

    public function showBlog(){
        return view('frontSite.blog');
    }

    public function showContacts(){
        return view('frontSite.contacts');
    }


    public function showServices(){
        return view('frontSite.services');
    }
}
