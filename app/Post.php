<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;
    protected $fillable =[
        'title','content','category_id','featured'
    ];
    public function Category()
{
    return $this->belongsTo('App\Category')->withDefault();
}
    public function tags()
{
    return $this->belongsToMany('App\Tag');
}
}
