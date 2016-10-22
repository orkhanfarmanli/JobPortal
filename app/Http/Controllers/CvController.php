<?php

namespace App\Http\Controllers;

// Default Modeller
use App\AddCv;
use App\CategoryModel;
use App\CityModel;
use App\EducationModel;
use App\ExperienceModel;

// Bizim Modeller
use App\Http\Controllers\Controller;
use App\Http\Requests\CvRequest;

class CvController extends Controller
{
     /**
      * Display a listing of the resource.
      *
      * @return \Illuminate\Http\Response
      */
     public function index()
     {
          $categories = CategoryModel::with('subcategories')->get();
          $resumes = AddCv::all();
          return view('resumes', compact('resumes', 'categories'));
     }

     /**
      * Show the form for creating a new resource.
      *
      * @return \Illuminate\Http\Response
      */
     public function create()
     {
          $categories = CategoryModel::with('subcategories')->get();
          $experience = ExperienceModel::all();
          $education = EducationModel::all();
          $city = CityModel::all();
          return view('resumes/new', compact('categories', 'experience', 'education', 'subcategories', 'city'));
     }

     /**
      * Store a newly created resource in storage.
      *
      * @param CvRequest|\Illuminate\Http\Request $request
      * @return \Illuminate\Http\Response
      */
     public function store(CvRequest $request)
     {
          AddCv::create($request->all());
          return redirect("resumes");
     }

     /**
      * Display the specified resource.
      *
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function show($id)
     {
          $cv = AddCv::findOrFail($id);
          return view('resumes/show', compact('cv', 'subcategories', 'education', 'experience', 'city'));

     }

     /**
      * Show the form for editing the specified resource.
      *
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function edit($id)
     {
          //
     }

     /**
      * Update the specified resource in storage.
      *
      * @param  \Illuminate\Http\Request  $request
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function update(Request $request, $id)
     {
          //
     }

     /**
      * Remove the specified resource from storage.
      *
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function destroy($id)
     {
          //
     }
}
