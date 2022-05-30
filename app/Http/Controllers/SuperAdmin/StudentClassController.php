<?php

namespace App\Http\Controllers\SuperAdmin;


use DB;

use App\Models\SuperAdmin\StudentClass;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;






class StudentClassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $data['alldata'] = studentclass::all();

        return view('superadmin.backend.class.view_class',$data);




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
    public function store(Request $request)
    {
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
        $data['alldata'] = studentclass::all();
        $data['editdata'] = studentclass::find($id);



        return view('superadmin.backend.class.view_class',$data);
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
        $data = StudentClass::findOrFail($id);        
        $input = $request->all();
        $action = $data->update($input);

        $alldata['alldata'] = studentclass::all();


    
        $notification = array(
            
            'message' => 'Class Updated Successfully',
            'alert-type' => 'success'

        );


        return redirect()->route('manage-class.index')->with($notification);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        

        $data = studentclass::findOrFail($id);
        $action = $data->delete();



        $notification = array(
            
            'message' => 'Class Deleted Successfully',
            'alert-type' => 'success'
        
        );



        return redirect()->back()->with($notification);

    }
}
