<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title="Welcome To Laravel!!";
        // return view('pages.index', compact('title')); //pages.index
        return view('pages.index')->with('title', $title);
    }

    public function about(){
        $title="About Us";
        return view('pages.about',compact('title')); //pages.about
    }

    public function services(){
        $data=array(
            'title'=>'Services',
            'services'=>['Web Design', 'Programming', 'SEO']
        );
        return view('pages.services')->with($data); //pages.services
    }

    // public function posts(){
    //     return view('pages.posts');
    // }

}
