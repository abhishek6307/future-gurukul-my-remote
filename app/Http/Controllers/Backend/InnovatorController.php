<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Innovator;
use Carbon\Carbon;
use Image;

class InnovatorController extends Controller
{

    public function InnovateView(){
        $sliders = Innovator::latest()->get();
        return view('backend.innovator.innovator',compact('sliders'));
    }


     public function InnovateStore(Request $request){

        $request->validate([

            'image' => 'required',
        ],[
            'image.required' => 'Plz Select One Image',

        ]);

        $image = $request->file('image');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(500,500)->save('upload/innovator/'.$name_gen);
        $save_url = 'upload/innovator/'.$name_gen;

    Innovator::insert([
        'name' => $request->nam,
        'about' => $request->about,
        'image' => $save_url,

        ]);

        $notification = array(
            'message' => 'Slider Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    } // end method 







        public function InnovateDelete($id){
        $slider = Innovator::findOrFail($id);
        $img = $slider->image;
        unlink($img);
        Innovator::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Slider Delectd Successfully',
            'alert-type' => 'info'
        );

        return redirect()->back()->with($notification);

    } // end method

}