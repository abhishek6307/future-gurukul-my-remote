<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CourseCategory;
use Image;
use App\Models\Product;

class CourseCategoryController extends Controller
{
    //

        public function CategoryView(){
        $category = CourseCategory::latest()->get();
        return view('backend.coursecategory.coursecategory_view', compact('category'));
    }


      public function CategoryStore(Request $request){
       
       $request->validate([
        'category_name' => 'required',
      
        'category_icon' => 'required',


       ],[

        'category_name_en.required' => 'Input Category English Name',
        

       ]);

       

       CourseCategory::insert([
        'category_name' => $request->category_name,
   
        'category_slug' => strtolower(str_replace(' ', '-', $request->category_name_en)),
        
        'category_icon' => $request->category_icon,
       ]);

       $notification = array(
        'message' => 'Category Inserted Successfully',
        'alert-type' => 'success'
       );
       return redirect()->back()->with($notification);

    }

        public function CategoryEdit($id){
        $category = CourseCategory::findOrFail($id);
        return view('backend.coursecategory.coursecategory_edit', compact('category'));
    }


         public function CategoryUpdate(Request $request ,$id){
               
        
                 CourseCategory::findOrFail($id)->update([
                'category_name' => $request->category_name,
              
                'category_slug' => strtolower(str_replace(' ', '-', $request->category_name_en)),
    
                'category_icon' => $request->category_icon,
               ]);

               $notification = array(
                'message' => 'Category Updated Successfully',
                'alert-type' => 'info'
               );
               return redirect()->route('course.category')->with($notification);

        
    }





       public function CategoryDlete($id){
       
        CourseCategory::findOrFail($id)->delete();

        $notification = array(
                'message' => 'Category Deleted Successfully',
                'alert-type' => 'info'
               );

        return redirect()->back()->with($notification);
    }
}
