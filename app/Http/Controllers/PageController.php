<?php

namespace boostrap\Http\Controllers;

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
    // cv əlavə etmə səhifəsi
    public function addCv(){
    	return view('resumes.new');
    }
    // Vacansiya əlavə et səhifəsi
    public function addVac(){
    	return view('vacancies.new');
    }
    // Hamısını göstər vakansiyalar
    public function showAllVac(){
    	return view('vacancies');
    }
    // Hamısını göstər cvlər
    public function showAllCv(){
    	return view('resumes');
    }
}
