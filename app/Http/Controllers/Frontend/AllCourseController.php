<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\CourseCategory;
use App\Models\Course;


class AllCourseController extends Controller
{
    //

        public function View(){
        $courses = Course::latest()->get();
        
        return view('frontend.course.course_view',compact('courses'));


    }

        public function CourseDetails($id,$slug){
        $course = Course::findOrFail($id);
        $cat_id = $course->coursecategory_id;
        
        return view('frontend.course.course_detail',compact('course', 'cat_id'));

    }


        public function CourseCart($id){
        $course = Course::findOrFail($id);
        
        return view('frontend.course.cart.cart',compact('course'));

    }


}
