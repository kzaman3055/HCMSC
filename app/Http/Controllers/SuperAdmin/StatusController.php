<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Models\User;
use App\Models\SuperAdmin\Student;

class StatusController extends Controller
{



    public function StudentStatus(Request $request,$student_id){


        $data['alldata'] = Student::join('users','students.student_id','=','users.student_id')->get(['students.*','users.status']);


        DB::table('users')->where('student_id',$student_id)->update(['status' => $request->status  ]);

     
        
  
        $notification = array(
        
            'message' => 'Status Updated Successfully',
            'alert-type' => 'success'
        
        );
        
        
        
        return redirect()->back()->with($data)->with($notification);
    
    
    }



}
