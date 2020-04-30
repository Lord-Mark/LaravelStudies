<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
    	$title = "Home Page";
    	return view('pages.index', compact('title'));
    }

    public function about()
    {
    	$title = "About Page";
    	return view('pages.about', compact('title'));
    }


    public function services()
    {
    	$data = [
    		'title' => "Services",
    		'services' => [
    			"Programming",
    			"Web Design",
    			"Beautyness"
    		]
    	];

    	return view('pages.services')->with($data);
    }

}
