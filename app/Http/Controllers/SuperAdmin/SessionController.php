<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


use DB;

use App\Models\SuperAdmin\Session;






class SessionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        

        $data['alldata'] = session::all();

        return view('superadmin.backend.academic.view_session',$data);




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
     
            'year'=>'required ',
           
        
        ]);   
        
        $data = new session();
        
        $data->year=$request->year;
        
        
        $data->save();
        
        $notification = array(
            
           'message' => 'Session Imserted Successfully',
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
        $data['alldata'] = session::all();
        $data['editdata'] = session::find($id);



        return view('superadmin.backend.academic.view_session',$data);    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Session::findOrFail($id);        
        $input = $request->all();
        $action = $data->update($input);

        $alldata['alldata'] = session::all();


    
        $notification = array(
            
            'message' => 'Session Updated Successfully',
            'alert-type' => 'success'

        );


        return redirect()->route('manage-session.index')->with($notification);    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = session::findOrFail($id);
        $action = $data->delete();



        $notification = array(
            
            'message' => 'Session Deleted Successfully',
            'alert-type' => 'success'
        
        );



        return redirect()->back()->with($notification);
    }
}
