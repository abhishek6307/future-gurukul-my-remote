<?php
// abhishek -s
namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\EnquireSchool;
use App\Models\EnquireStudent;

class EnquiryController extends Controller
{

    public function SchoolEnquiryView(){
        $schoolResponse = EnquireSchool::latest()->get();
        return view('backend.enquiry.school_view', compact('schoolResponse'));
    }
    public function StudentEnquiryView(){
        $studentResponse = EnquireStudent::latest()->get();
        return view('backend.enquiry.student_view', compact('studentResponse'));
    }

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

    public function EnquiryStudentStore(Request $request){
        EnquireStudent::insert([
      
        'name' => $request->name,
        'number' => $request->number,      
       ]);
       return redirect()->back();
}
}
// abhishek -e