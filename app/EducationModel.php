<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EducationModel extends Model
{
    protected $table = 'education';

    protected $fillable = [
    	'edu_name'
    ];

   	public function cv(){
    	return $this->hasMany('App\AddCv');
    }
	public function vacancy(){
	    return $this->hasMany('App\AddVac');
    }
}
