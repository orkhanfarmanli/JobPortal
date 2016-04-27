<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCategoryModel extends Model
{
    protected $table = 'subcategories';

    protected $fillable = [
    	'name'
    ];

        public function categories(){
        return $this->belongsTo('App\CategoryModel','cat_id');
    }

    public function cv(){
    	return $this->hasMany('App\AddCv');
    }
    
    public function vacancy(){
    	return $this->hasMany('App\AddVac');
    }

}
