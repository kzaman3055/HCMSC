<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use DB;
use Hash;

use App\Models\SuperAdmin\Student;
class AssignPasswordController extends Controller
{



    public function PasswordAssignShow($student_id)
    {

// $data = User::find($student_id);
 $data['showdata'] = DB::table('users')->where('student_id', $student_id)->get();


        return view('superadmin.backend.manage_profile.student.assign_student_password',$data);



    }


    public function PasswordAssignStore(Request $request, $id){



        $data = User::find($id);
        $data->email=$request->email;
        $data->password=Hash::make($request->password);
        $data->save();

        return redirect()->back();

        
    }


}
