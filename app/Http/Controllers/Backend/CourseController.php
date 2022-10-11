<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CourseCategory;
use App\Models\Course;
use App\Models\Video;
use App\Models\EnrolledCourse;
use Carbon\Carbon;
use Image;
use Auth;

class CourseController extends Controller
{
    //

        public function AddCourse(){
        $categories = CourseCategory::latest()->get();
        
        return view('backend.course.course_add',compact('categories'));


    }



        public function StoreCourse(Request $request){

        $image = $request->file('course_thambnail');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(720,720)->save('upload/course/thambnail/'.$name_gen);
        $save_url = 'upload/course/thambnail/'.$name_gen;

       $product_id = Course::insertGetId([
        
        'coursecategory_id' => $request->category_id,
        
       
        'course_name' => $request->course_name,
       
        'course_slug' =>  strtolower(str_replace(' ', '-', $request->course_name)),
        
        'course_code' => $request->course_code,

        'selling_price' => $request->selling_price,
        'discount_price' => $request->discount_price,
        'short_descp' => $request->short_descp,
       
        'long_descp' => $request->long_descp,
        

        'course_thambnail' => $save_url,
        'status' => 1,
        'created_at' => Carbon::now(),         
    ]);





       $notification = array(
            'message' => 'Course Created Successfully',
            'alert-type' => 'success'
        );

       return redirect()->route('manage-course')->with($notification);




    } // end method


        public function EditCourse($id){

        $categories = CourseCategory::latest()->get();
        $products = Course::findOrFail($id);
        return view('backend.course.course_edit',compact('categories','products'));

    }


        public function ProductDataUpdate(Request $request){

        $product_id = $request->id;

         Course::findOrFail($product_id)->update([
        'coursecategory_id' => $request->category_id,
        'course_name' => $request->course_name,
        'course_code' => $request->course_code,
        'selling_price' => $request->selling_price,
        'discount_price' => $request->discount_price,
        'short_descp' => $request->short_descp,
        'long_descp' => $request->long_descp,
        'status' => 1,
        'created_at' => Carbon::now(),
      ]);

          $notification = array(
            'message' => 'Product Updated Without Image Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('manage-course')->with($notification);


    } 


    public function ThambnailImageUpdate(Request $request){
    $pro_id = $request->id;
    $oldImage = $request->old_img;
    unlink($oldImage);

    $image = $request->file('course_thambnail');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(917,1000)->save('upload/course/thambnail/'.$name_gen);
        $save_url = 'upload/course/thambnail/'.$name_gen;

       Course::findOrFail($pro_id)->update([
            'course_thambnail' => $save_url,
            'updated_at' => Carbon::now(),

        ]);

         $notification = array(
            'message' => 'Product Image Thambnail Updated Successfully',
            'alert-type' => 'info'
        );

        return redirect()->back()->with($notification);

     } // end method



    public function ManageCourse(){

        $products = Course::latest()->get();
        return view('backend.course.course_view',compact('products'));
    }


    public function CourseInactive($id){
        Course::findOrFail($id)->update(['status' => 0]);
        $notification = array(
            'message' => 'Product Inactive',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
     }


  public function CourseActive($id){
    Course::findOrFail($id)->update(['status' => 1]);
        $notification = array(
            'message' => 'Product Active',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

     }



        public function CourseDelete($id){
        $product = Course::findOrFail($id);
        unlink($product->course_thambnail);
        Course::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Product Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

     }// end method 



     /// front end my course

        public function MyCourse(){
        $id = Auth::id();
        $courses = EnrolledCourse::where('user_id', $id)->latest()->get();
        return view('frontend.mycourse.mycourse',compact('courses'));
        }

        public function Videos($id){
        
        $videos = Video::where('course_id', $id)->latest()->get();
        $course_id = $id;
        $playVideo = $videos->first();
        return view('frontend.mycourse.video',compact('playVideo','videos', 'course_id'));
        }

        public function Play($courseId, $videoId){
        $playVideo = Video::findOrFail($videoId);
        $videos = Video::where('course_id', $courseId)->latest()->get();
        $course_id = $courseId;
        return view('frontend.mycourse.video',compact('playVideo', 'videos', 'course_id'));
        }

   



}
