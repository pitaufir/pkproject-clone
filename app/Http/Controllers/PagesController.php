<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function index(){
        $title = "Welcome to the ProgrammingKnowledge";

        // return view('pages.index', compact('title'));
        return view('pages.index')->with('title', $title);
    }
    public function about(){ 
        $title = "About Us";
        return view('pages.about')->with('title', $title);
    }

    public function services(){
        $data= array(
            'title' => 'Services',
            'body' => 'This is a Services page from controller',
            'services' => ['Web', 'Programming', 'SEO']
        );
        return view('pages.services')->with($data);
    }
}
