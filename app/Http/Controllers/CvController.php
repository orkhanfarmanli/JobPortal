<?php

namespace App\Http\Controllers;
// Default Modeller
use Request;
use App\CategoryModel;
use App\SubCategoryModel;
use App\ExperienceModel;
use App\EducationModel;
use View;
use Carbon\Carbon;
use App\Http\Requests;
use Illuminate\Support\Facedes\Input;
Use App\Http\Controllers\Controller;

// Bizim Modeller
use App\AddCv;

class CvController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
            $resumes = AddCv::all();
            return view('resumes', compact('resumes'));
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
        return view('resumes/new',compact('categories', 'experience','education'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        AddCv::create(Request::all());
        return redirect('resumes');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cv = AddCv::find($id);
        return view('resumes/show'); 

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
