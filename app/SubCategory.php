<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
       protected $fillable = [
        'parent_id','sub_category'
    ];
    public function category(){

    	 return $this->belongsTo('App\Category');
    }
}