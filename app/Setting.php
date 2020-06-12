<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = [
        'blog_name','about', 'phone_number', 'email_blog','address'
    ];
}
