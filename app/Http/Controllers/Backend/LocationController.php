<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\States;
use App\Models\Cities;
use App\Models\Schools;
use App\Models\Schoolsresponse;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function statesView()
    {
        $states = States::latest()->get();
        return view('backend.locations.state', compact('states'));
        
    }
    public function citiesView()
    {
      
        $states = States::orderBy('state_name', 'ASC')->get();
        $cities = Cities::latest()->get();
        return view('backend.locations.city', compact('states',"cities"));
        
    }
    public function schoolsView()
    {
      
        $states = States::orderBy('state_name', 'ASC')->get();
        $cities = Cities::orderBy('city_name', 'ASC')->get();
        $schools = Schools::latest()->get();
        return view('backend.locations.school', compact('states',"cities","schools"));
        
    }
    public function enquiryschoolsView()
    {
      
        $states = States::orderBy('state_name', 'ASC')->get();
        $cities = Cities::orderBy('city_name', 'ASC')->get();
        $schools = Schools::orderBy('school_name', 'ASC')->get();
        $enquireds = Schoolsresponse::latest()->get();
        return view('backend.locations.schoolenquiry', compact('states',"cities","schools","enquireds"));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function stateStore(Request $request)
    {
        States::insert([
            'state_name' => $request->state_name,
            
           ]);
           return redirect()->back();
    }
    public function cityStore(Request $request)
    {
        Cities::insert([
            'state_id' => $request->state_id,
            'city_name' => $request->city_name,
            
           ]);
           return redirect()->back();
    }
    public function schoolStore(Request $request)
    {
        Schools::insert([
            'state_id' => $request->state_id,
            'city_id' => $request->city_id,
            'school_name' => $request->school_name,
            
           ]);
           return redirect()->back();
    }
    public function enquiryschoolsStore(Request $request)
    {
        Schoolsresponse::insert([
            'state_id' => $request->state_id,
            'city_id' => $request->city_id,
            'school_id' => $request->school_id,
            'school_response' => $request->school_response,
            'next_meet' => $request->next_meet,
            'workshop' => $request->workshop,
            'remark' => $request->remark,
            
            
           ]);
           return redirect()->back();
    }




       public function GetCity($state_id)
    {

        $subcat = Cities::where('state_id',$state_id)->orderBy('city_name','ASC')->get();
        return json_encode($subcat);
     }
       public function GetSchool($city_id)
    {

        $sch = Schools::where('city_id',$city_id)->orderBy('school_name','ASC')->get();
        return json_encode($sch);
     }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function enquiryschoolsedit($id)
    {
        $states = States::orderBy('state_name', 'ASC')->get();
        $cities = Cities::orderBy('city_name', 'ASC')->get();
        $schools = Schools::orderBy('school_name', 'ASC')->get();
        $enquireds = Schoolsresponse::findOrFail($id);
        return view('backend.locations.schoolenquiry_edit', compact('states',"cities","schools","enquireds"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function enquiryschoolsUpdate(Request $request)
    {
        $enquireds_id = $request->id;

        Schoolsresponse::findOrFail($enquireds_id)->update([
            'state_id' => $request->state_id,
            'city_id' => $request->city_id,
            'school_id' => $request->school_id,
            'school_response' => $request->school_response,
            'next_meet' => $request->next_meet,
            'workshop' => $request->workshop,
            'remark' => $request->remark,

        ]);
      
        return redirect()->route('all.enquiryschools');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
