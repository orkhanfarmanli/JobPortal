<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EducationModel extends Model
{
     protected $table = 'education';

     protected $fillable = [
          'edu_name',
     ];

     public function cv()
     {
          return $this->hasMany('App\AddCv', 'cv_education_id');
     }
     public function vacancy()
     {
          return $this->hasMany('App\AddVac', 'vac_education_id');
     }
}
