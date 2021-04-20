<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $title = 'Welcome To Come And Explore';
        //return view('Pages.index',compact('title'));
        return view('Pages.index')->with('title',$title);
    }
    public function about()
    {
        $title = 'About Us';
        return view('Pages.about')->with('title',$title);
    }
    public function services()
    {
        $data = array(
            'title' => 'Services',
            'services' => ['Web Development','SEO','Programming'],
        );
        return view('Pages.services')->with($data);
    }
}
