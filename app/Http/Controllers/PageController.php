<?php

namespace App\Http\Controllers;

use App\AddCv;
use App\AddVac;
use App\CategoryModel;
use App\CityModel;
use App\EducationModel;
use App\ExperienceModel;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
     // Əsas Səhifə
     /**
      * @return mixed
      */
     public function home()
     {
          $categories = CategoryModel::with('subcategories')->get();
          $education = EducationModel::all();
          $experience = ExperienceModel::all();
          $cities = CityModel::all();
          $vacancies = AddVac::orderBy('id', 'DESC')->take(9)->get();
          return view('welcome', compact('vacancies', 'categories', 'education', 'experience', 'cities'));
     }

     /**
      * @return mixed
      */
     public function resumesHome()
     {
          $categories = CategoryModel::with('subcategories')->get();
          $education = EducationModel::all();
          $experience = ExperienceModel::all();
          $cities = CityModel::all();
          $resumes = AddCv::orderBy('id', 'DESC')->take(9)->get();
          return view('categories/resumes', compact('resumes', 'categories', 'education', 'experience', 'cities'));
     }
     // Haqqında səhifəsi
     public function about()
     {
          $categories = CategoryModel::all();
          return view('pages.about', compact('categories'));
     }
     // Haqqında reklam səhifəsi
     public function advertising()
     {
          $categories = CategoryModel::all();
          return view('pages.advertising', compact('categories'));
     }
     //Admin Page
     public function admin()
     {
          return view('admin.index');
     }
     //Layout categories
     /**
      * @return mixed
      */
     public function layout()
     {
          $categories = CategoryModel::all();
          return view('layout', compact('categories'));
     }
}
