<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CityModel extends Model
{
     protected $table = 'city';

     protected $fillable = [
          'city_name',
     ];

     public function cv()
     {
          return $this->hasMany('App\AddCv', 'cv_city_id');
     }
     public function vacancy()
     {
          return $this->hasMany('App\AddVac', 'vac_city_id');
     }
}
