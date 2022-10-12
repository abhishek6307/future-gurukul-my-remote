<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\EnquireSchool;

class EnquiryController extends Controller
{
    public function EnquirySchoolStore(Request $request){
    EnquireSchool::insert([
        'role_at_school' => $request->role_at_school,
        'name' => $request->name,
        'number' => $request->number,
        'state_name' => $request->state_name,
        'school_medium' => $request->school_medium,
        'students_strength' => $request->students_strength,
       
       ]);
       return redirect()->back();
}
}
