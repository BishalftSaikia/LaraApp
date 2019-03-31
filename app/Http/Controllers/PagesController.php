<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{


    Public function index() {
        $title="Laravel App";
        return view('pages.index')->with('indexTitle',$title);
    }

    Public function about(){
        $title='About Us';
        return view('pages.about')->with('title',$title);
    }

    Public function services(){
        $data = array(
            'title' => 'Our Services',
            'services' => ['product desiging','data control','app building']
        );
        return view('pages.services')->with($data);
    }
};
