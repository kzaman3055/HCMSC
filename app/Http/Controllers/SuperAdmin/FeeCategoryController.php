<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use DB;

use App\Models\SuperAdmin\FeeCategory;


class FeeCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        
        $data['alldata'] = feecategory::all();

        return view('superadmin.backend.academic.view_feecategory',$data);


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
        
        $data = new FeeCategory();
        
        $data->name=$request->name;
        
        
        $data->save();
        
        $notification = array(
            
           'message' => 'Fee Category Imserted Successfully',
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
        $data['alldata'] = feecategory::all();
        $data['editdata'] = feecategory::find($id);



        return view('superadmin.backend.academic.view_feecategory',$data);
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
        $data = FeeCategory::findOrFail($id);        
        $input = $request->all();
        $action = $data->update($input);

        $alldata['alldata'] = FeeCategory::all();


    
        $notification = array(
            
            'message' => 'Fee Category Updated Successfully',
            'alert-type' => 'success'

        );


        return redirect()->route('manage-fee-category.index')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = feecategory::findOrFail($id);
        $action = $data->delete();



        $notification = array(
            
            'message' => 'Fee Category Deleted Successfully',
            'alert-type' => 'success'
        
        );



        return redirect()->back()->with($notification);
    }
}
