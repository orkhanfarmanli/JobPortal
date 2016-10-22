<?php

namespace App\Http\Controllers;

// Default Modeller
use App\AddVac;
use App\CategoryModel;
use App\CityModel;
use App\EducationModel;

// Bizim Modeller
use App\ExperienceModel;
use Carbon\Carbon;
use Illuminate\Http\Request;

class VacController extends Controller
{
     /**
      * Display a listing of the resource.
      *
      * @return \Illuminate\Http\Response
      */
     public function index(Request $request)
     {
          $categories = CategoryModel::with('subcategories')->get();
          $experience = ExperienceModel::all();
          $education = EducationModel::all();
          $city = CityModel::all();
          $vacancies = AddVac::where(function ($query) use ($request) {
               $category = $request->input('vac_category_id');
               $education = $request->input('vac_education_id');
               $experience = $request->input('vac_experience_id');
               $city = $request->input('vac_city_id');
               $salary = $request->input('vac_min_salary');
               $term = $request->input('term');
               if ($category) {
                    $query->where('vac_category_id', 'LIKE', '%' . $category . '%')
                         ->orWhere('vac_education_id', 'LIKE', '%' . $education . '%')
                         ->orWhere('vac_experience_id', 'LIKE', '%' . $experience . '%')
                         ->orWhere('vac_city_id', 'LIKE', '%' . $city . '%')
                         ->orWhere('vac_min_salary', 'LIKE', '%' . $salary . '%')
                         ->orWhere('vac_position', 'LIKE', '%' . $term . '%');
               }
          })->paginate(6);
          return view('vacancies', compact('vacancies', 'categories', 'experience', 'education', 'city'));

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
          return view('vacancies/new', compact('categories', 'experience', 'education', 'subcategories', 'city'));
     }

     /**
      * Store a newly created resource in storage.
      *
      * @param  \Illuminate\Http\Request  $request
      * @return \Illuminate\Http\Response
      */
     public function store(Request $request)
     {
          AddVac::create($request->all());
          $request->updated_at = Carbon::now();
          return redirect('vacancies');
     }
     /**
      * Display the specified resource.
      *
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function show($id)
     {

          $vac = AddVac::findOrFail($id);
          return view('vacancies/show', compact('vac', 'subcategories', 'education', 'experience', 'city'));

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
