<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

        protected $guarded = [];


        protected $fillable = [
        'course_name',
        'video_name',
        'video',
        
    ];

     public function category(){
        return $this->belongsTo(Course::class,'course_id','id');
    }
}
