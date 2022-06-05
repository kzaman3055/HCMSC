<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Models\User;
use App\Models\SuperAdmin\StudentClass;

use App\Models\SuperAdmin\Session;

use App\Models\SuperAdmin\Group;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $classData['classData'] = StudentClass::all();
        $sessionData['sessionData'] = Session::all();
        $groupData['groupData'] = Group::all();


        return view('superadmin.backend.manage_profile.student.add_student',$classData,$sessionData)->with($groupData);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $data = new User();

        $data->name=$request->name;
        $data->dob=$request->dob;
        $data->class=$request->class;
        $data->group=$request->group;

        $data->session=$request->session;
        $data->f_name=$request->f_name;
        $data->f_mobile_num	=$request->f_mobile_num;
        $data->f_profession=$request->f_profession;
        $data->f_income=$request->f_income;
        $data->m_name=$request->m_name;
        $data->m_mobile_num=$request->m_mobile_num;
        $data->m_profession=$request->m_profession;
        $data->g_nid=$request->g_nid;
        $data->gender=$request->gender;
        $data->religion=$request->religion;
        $data->birth_reg_num=$request->birth_reg_num;
        $data->blood_group=$request->blood_group;

        $data->present_address=$request->present_address;
        $data->present_district=$request->present_district;
        $data->present_thana=$request->present_thana;
        $data->present_poffice=$request->present_poffice;
        $data->present_pcode=$request->present_pcode;
        $data->permanent_address=$request->permanent_address;
        $data->permanent_district=$request->permanent_district;
        $data->permanent_thana=$request->permanent_thana;
        $data->permanent_poffice=$request->permanent_poffice;
        $data->permanent_pcode=$request->permanent_pcode;
        $data->blood_group=$request->blood_group;


        if($request->file('image')){
        
        
            $file = $request->file('image');
            @unlink(public_path('upload/user_images/'.$data->image));
        
            $filename=date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/user_images'),$filename);
            $data['image']=$filename;
        
        }
   
        
        $data->save();
        
        $notification = array(
            
           'message' => 'Student Data Imserted Successfully',
           'alert-type' => 'success'
       
       );
        
        
        
        return redirect()->back()->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
