<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SuperAdmin\StudentClass;
use Illuminate\Support\Facades\Redirect;


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
        'alert-type' => 'successf'
    
    );
     
     
     
     return redirect()->route('class.view')->with($notification);
     
         }




         public function ClassEdit($id){
            $editData = StudentClass::find($id);
            return view('superadmin.backend.class.view_class',compact('editData'));
    
        }

/**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $class = StudentClass::find($id);
        return response()->json([
            'status' => 'success',
            'class' => $class
        ]);
    }





    public function update(Request $request)
    {
   
        $class_id = $request->input('class_id');
        $class = StudentClass::find($class_id);
        $class->name = $request->input('name');
     
        $class->save();

        return Redirect::route('class.view');

    }















        public function ClassUpdate(Request $request,$id){



            $data = StudentClass::find($id);



            $data->name=$request->name;
           


            
            $data->save();
            
            $notification = array(
            
                'message' => 'Class Updated Successfully',
                'alert-type' => 'success'
            
            );
            
            
            
            return redirect()->route('destination.view')->with($notification);
        
        
        
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
