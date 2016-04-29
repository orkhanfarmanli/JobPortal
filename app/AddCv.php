<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AddCv extends Model
{
	// Cv əlavə etmə model
    protected $table = 'cv';

    protected $fillable = [
    	'cv_name',
    	'cv_surname',
    	'cv_midname',
    	'cv_phone',
    	'cv_email',
    	'cv_male',
    	'cv_age',
    	'cv_avatar',
    	'cv_edu_detail',
    	'cv_exp_detail',
    	'cv_skills_detail',
        'vac_personal_info',
    	'cv_category_id',
    	'cv_experience_id',
    	'cv_city_id',
    	'cv_education_id'
    ]; 

    public function subcategories(){
        return $this->belongsTo('App\SubCategoryModel','cv_category_id');
    }
    public function city(){
        return $this->belongsTo('App\CityModel','cv_city_id');
    }
    public function education(){
        return $this->belongsTo('App\EducationModel','cv_education_id');
    }
    public function experience(){
        return $this->belongsTo('App\ExperienceModel','cv_experience_id');
    }
}
