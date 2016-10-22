<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AddVac extends Model
{
     // Vakansiya əlavə etmə model
     protected $table = 'vacancy';

     protected $fillable = [
          'vac_email',
          'vac_phone',
          'vac_position',
          'vac_min_salary',
          'vac_max_salary',
          'vac_min_age',
          'vac_max_age',
          'vac_requirements',
          'vac_job_description',
          'vac_company_name',
          'vac_contact',
          'vac_category_id',
          'vac_experience_id',
          'vac_city_id',
          'vac_education_id',
     ];
     public function subcategories()
     {
          return $this->belongsTo('App\SubCategoryModel', 'vac_category_id');
     }
     public function city()
     {
          return $this->belongsTo('App\CityModel', 'vac_city_id');
     }
     public function education()
     {
          return $this->belongsTo('App\EducationModel', 'vac_education_id');
     }
     public function experience()
     {
          return $this->belongsTo('App\ExperienceModel', 'vac_experience_id');
     }
}
