<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SuperAdmin\StudentClass;


class ClassController extends Controller
{
    public function ClassView(){

        $data['alldata'] = studentclass::all();

        return view('superadmin.backend.class.view_class',$data);
    
    }






    public function ClassStore(Request $request){
        $validateData=$request-> validate([
     
         'name'=>'required ',
        
     
     ]);   
     
     $data = new StudentClass();
     
     $data->name=$request->name;
     
     
     $data->save();
     
     $notification = array(
         
        'message' => 'Class Imserted Successfully',
        'alert-type' => 'success'
    
    );
     
     
     
     return redirect()->route('class.view')->with($notification);
     
         }




         public function ClassEdit($id){
            $editData = StudentClass::find($id);
            return view('superadmin.backend.class.view_class',compact('editData'));
    
        }



        public function ClassUpdate(Request $request,$id){



            $data = StudentClass::find($id);



            $data->name=$request->name;
           


            
            $data->save();
            
            $notification = array(
            
                'message' => 'Class Updated Successfully',
                'alert-type' => 'success'
            
            );
            
            
            
            return redirect()->route('class.view')->with($notification);
        
        
        
        }


         public function ClassDelete($id){

            $student_classes = StudentClass::find($id);
            $student_classes-> delete();
            
            
            $notification = array(
                
                'message' => 'Class Deleted Successfully',
                'alert-type' => 'success'
            
            );
            
            
            
            return redirect()->route('class.view')->with($notification);
            
            
            
            }
    



}
