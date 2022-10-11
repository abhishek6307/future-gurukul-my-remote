<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Category;
use App\Models\Product;
use App\Models\Map;
use Carbon\Carbon;
use Image;

class MapController extends Controller
{
    //
         public function Map(){
         $courses = Course::latest()->get();
         $categoryId = Category::where('category_name_en', 'Kit')->first()->id;
         $kits = Product::where('category_id', $categoryId)->latest()->get();
         $maps = Map::latest()->get();
         return view('backend.course.map.map_kit_course',compact('courses','kits','maps'));

         }// end method 

      public function StoreMap(Request $request){
       
       $request->validate([
        'kit_id' => 'required',
        'course_id' => 'required',
       


       ],[

        'kit_id.required' => 'Please Select any Option',
        'course_id.required' => 'Please Select any Option',

       ]);

       

       Map::insert([
        'kit_id' => $request->kit_id,
        'course_id' => $request->course_id,
       
       ]);

       $notification = array(
        'message' => 'Mapping has been completed Successfully',
        'alert-type' => 'success'
       );
       return redirect()->back()->with($notification);

    }
}
