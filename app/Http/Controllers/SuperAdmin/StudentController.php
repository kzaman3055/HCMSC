<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Models\User;
use App\Models\SuperAdmin\Student;
use Carbon\Carbon;

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
        // $data['alldata'] = Student::all();


        $data['alldata'] = Student::join('users','students.student_id','=','users.student_id')->get(['students.*','users.status']);

        return view('superadmin.backend.manage_profile.student.view_student',$data);  
      }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $sessionData['sessionData'] = Session::all();
        $groupData['groupData'] = Group::all();


        return view('superadmin.backend.manage_profile.student.add_student',$sessionData)->with($groupData);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $data = new Student();
        
        $data->name=$request->name;

        $data->dob=$request->dob;
        $data->class=$request->class;
        $data->admission_class=$request->class;
        $data->group=$request->group;
        $data->addmission_year = Carbon::now()->format('Y');

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



        //ID generate
        $last = DB::table('students')->latest()->first();
        $cnt = student::count();
        $curr_year = Carbon::now()->format('Y');
        $two_digit_year = (int)Carbon::now()->format('y');
        $class_string =  $request->class;
        $class = 0;

        switch($request->class) {
            case 'Class One':
                $class=1;
                break;
            case 'Class Two':
                $class=2;
                break;
            case 'Class Three':
                $class=3;
                break;
            case 'Class Four':
                $class=4;
                break;
            case 'Class Five':
                $class=5;
                break;
            case 'Class Six':
                $class=6;
                break;
            case 'Class Seven':
                $class=7;
                break;
            case 'Class Eight':
                $class=8;
                break;
            case 'Class Nine':
                $class=9;
                break;
            case 'Class Ten':
                $class=10;
                break;
            case 'Class Eleven':
                $class=11;
                break;
            case 'Class Twelve':
                $class=12;
                break;
            default:
                $class=0;
                break;
        }

        if($class<10) {
            $two_digit_year = $two_digit_year*10;
        }

        $year_class = $two_digit_year.$class;
        
        if($cnt>0 && $last->addmission_year==$curr_year){
            $last_digit = $last->student_id%1000+1;
            $data->student_id = $year_class*10000+$last_digit;
        } else {
            $data->student_id = $year_class*10000+1;
         
        }


        DB::table('users')->insert(
            ['student_id' => $data->student_id]
        );
   
        
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
        $data['alldata'] = Student::all();
        $data['editdata'] = Student::find($id);

        $sessionData['sessionData'] = Session::all();
        $groupData['groupData'] = Group::all();




  





        return view('superadmin.backend.manage_profile.student.edit_student',$data)->with($groupData)->with($sessionData
    ); 
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

        $data = Student::findOrFail($id);       

        $input = $request->all();
        $action = $data->update($input);
        $alldata['alldata'] = Student::all();


        $notification = array(
            
            'message' => 'Student Updated Successfully',
            'alert-type' => 'success'

        );


        return redirect()->route('manage-student.index')->with($notification); 
    }




    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data =Student::findOrFail($id);
        $action = $data->delete();



        $notification = array(
            
            'message' => 'Student Deleted Successfully',
            'alert-type' => 'success'
        
        );



        return redirect()->back()->with($notification);

    }
}
