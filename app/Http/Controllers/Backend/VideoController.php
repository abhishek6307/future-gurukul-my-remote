<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CourseCategory;
use App\Models\Course;
use App\Models\Category;
use App\Models\Product;
use App\Models\Video;
use Carbon\Carbon;
use Image;

class VideoController extends Controller
{
    //
        public function AddVideo(){

        $course = Course::latest()->get();
        
        return view('backend.course.upload_video',compact('course'));

        }

        public function StoreVideo(Request $request){

         $request->validate([
        'video_file' => 'required|mimes:mp4,ogx,oga,ogv,ogg,webm'
            ]);

        $file = $request->file('video_file');
        $name_gen = hexdec(uniqid()).'.'.$file->getClientOriginalExtension();
        $file->move('upload/course/video', $name_gen);
        $save_url = 'upload/course/video/'.$name_gen;
        
        $courseName = Course::where('id', $request->course_id)->latest()->first();

        Video::insert([
        'course_id' => $request->course_id,
        'course_name' => $courseName->course_name,
        'video_name' => $request->video_name,
        'video' => $save_url,
       ]);

       $notification = array(
        'message' => 'Video Added to the course Successfully',
        'alert-type' => 'success'
       );
       return redirect()->back()->with($notification);

        }


        public function ManageVideo(){

        $videos = Video::latest()->get();
        $course = Course::latest()->get();
        return view('backend.course.manage_video',compact('videos', 'course'));
    }

        public function ViewVideo($id){

        $courses = Course::latest()->get();
        $videos = Video::where('course_id', $id)->get();
        return view('backend.course.view_video',compact('courses', 'videos'));

        }

        public function EditVideo($id){

        $courses = Course::latest()->get();
        $videos = Video::findOrFail($id);
        return view('backend.course.video_edit',compact('courses','videos'));

    }



           public function VideoUpdate(Request $request){
        $video_id = $request->id;
        $old_video = $request->old_video;

            if($request->file('video_file')){

               unlink($old_video);
               $file = $request->file('video_file');
                $name_gen = hexdec(uniqid()).'.'.$file->getClientOriginalExtension();
                $file->move('upload/course/video', $name_gen);
                $save_url = 'upload/course/video/'.$name_gen;

               Video::findOrFail($video_id)->update([
                'video_name' => $request->video_name,
                'video' => $save_url,
               ]);

               $notification = array(
                'message' => 'Video Updated Successfully',
                'alert-type' => 'info'
               );
               return redirect()->back()->with($notification);



            }else{

                 Video::findOrFail($video_id)->update([
                 'video_name' => $request->video_name,
           
               
               ]);

               $notification = array(
                'message' => 'Video Updated Successfully',
                'alert-type' => 'info'
               );
              return redirect()->back()->with($notification);

            }

        
    }

        public function VideoDelete($id){
        $videos = Video::findOrFail($id);
        unlink($videos->video);
        Video::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Video Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

     }// end method 



}
