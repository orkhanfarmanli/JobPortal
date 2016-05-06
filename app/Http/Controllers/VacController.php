<?php

namespace App\Http\Controllers;
// Default Modeller
use Request;
use Carbon\Carbon;
use App\Http\Requests;

// Bizim Modeller
use App\AddVac;
use App\CityModel;
use App\CategoryModel;
use App\SubCategoryModel;
use App\ExperienceModel;
use App\EducationModel;
use DB;


class VacController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = CategoryModel::with('subcategories')->get();
        $vacancies = AddVac::with('subcategories','education','experience','city')->get();
        $roles = DB::table('vacancy')->pluck('id');
        return view('vacancies', compact('vacancies','roles','categories'));

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
        return view('vacancies/new', compact('categories', 'experience','education','subcategories','city'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        AddVac::create(Request::all());
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
        return view('vacancies/show', compact('vac','subcategories','education','experience','city'));

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