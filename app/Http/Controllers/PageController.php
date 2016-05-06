<?php

namespace App\Http\Controllers;

use App\CategoryModel;
Use App\Http\Controllers\Controller;

class PageController extends Controller
{
    // Əsas Səhifə
    /**
     * @return mixed
     */
    public function home(){
        $categories = CategoryModel::with('subcategories')->get();
    	return view('welcome',compact('categories'));
    }

    /**
     * @return mixed
     */
    public function resumesHome(){
        $categories = CategoryModel::with('subcategories')->get();
        return view('categories/resumes', compact('categories'));
    }
    // Haqqında səhifəsi
    public function about(){
        $categories = CategoryModel::all();
    	return view('pages.about', compact('categories'));
    }
    // Haqqında reklam səhifəsi
     public function advertising(){
         $categories = CategoryModel::all();
    	return view('pages.advertising', compact('categories'));
    }
    //Admin Page
    public function admin(){
        return view('admin.index');
    }
    //Layout categories
    /**
     * @return mixed
     */
    public function layout(){
        $categories = CategoryModel::all();
        return view('layout', compact('categories'));
    }
}