<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseCategory extends Model
{
    use HasFactory;

         protected $fillable = [
        'category_name',
        'category_slug',
        'category_icon',
    ];
}