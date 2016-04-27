<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    // Əsas Səhifə
    public function home(){
    	return view('welcome');
    }
    // Haqqında səhifəsi
    public function about(){
    	return view('pages.about');
    }
    // Haqqında reklam səhifəsi
     public function advertising(){
    	return view('pages.advertising');
    }
    //Admin Page
    public function admin(){
        return view('admin.dash');
    }
}