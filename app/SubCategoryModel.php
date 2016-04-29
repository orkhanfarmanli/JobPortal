<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCategoryModel extends Model
{
    protected $table = 'subcategories';

    protected $fillable = [
    	'subcat_name'
    ];

        public function categories(){
        return $this->belongsTo('App\CategoryModel','cat_id');
    }

    public function cv(){
    	return $this->hasMany('App\AddCv','cv_category_id');
    }
    
    public function vacancy(){
    	return $this->hasMany('App\AddVac','vac_category_id');
    }

}
