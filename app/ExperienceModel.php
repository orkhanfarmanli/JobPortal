<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExperienceModel extends Model
{
    protected $table = 'experience';

    protected $fillable = [
    	'exp_name'
    ];

   	public function cv(){
    	return $this->hasMany('App\AddCv');
    }
	public function vacancy(){
	    return $this->hasMany('App\AddVac');
    }
}
