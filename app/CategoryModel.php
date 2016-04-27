<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoryModel extends Model
{
    protected $table = 'categories';

    protected $fillable = [
    	'name'
    ];

    public function subcategories(){
    	return $this->hasMany('App\SubCategoryModel','cat_id');
    }
}
