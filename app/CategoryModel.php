<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoryModel extends Model
{
     protected $table = 'categories';

     protected $fillable = [
          'cat_name',
     ];

     public function subcategories()
     {
          return $this->hasMany('App\SubCategoryModel', 'cat_id');
     }
}
