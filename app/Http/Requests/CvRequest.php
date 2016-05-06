<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CvRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'cv_name'           => 'required|min:3',
            'cv_surname'        => 'required|min:3',
            'cv_midname'        => 'required|min:3',
            'cv_male'           => 'required',
            'cv_age'            => 'required',
            'cv_education_id'   => 'required',
            'cv_experience_id'  => 'required',
            'cv_category_id'  => 'required',
            'cv_position_name'  => 'required|min:3',
            'cv_city_id'        => 'required',
            'cv_min_salary'     => 'required',
            'cv_email'          => 'required',
            'cv_phone'          => 'required'
        ];
    }
    public function messages()
    {
        return [
            'required' => 'bölmə doldurulmalıdır',
            'min'  => 'çox qısadır (3 simvoldan az olmalı deyil)',
            'cv_email.required' => 'Qeyri düzgün format',
        ];
    }
}
