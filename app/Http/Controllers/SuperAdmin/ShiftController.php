<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;

use App\Models\SuperAdmin\Shift;
class ShiftController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $data['alldata'] = shift::all();
     

        return view('superadmin.backend.academic.view_shift',$data);


        
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
        $last = DB::table('shifts')->latest()->first();
        $cnt = shift::count();
        $data = Shift::create($request->all());
        $n = Carbon::now()->format('Y');
        $dt = (int)Carbon::now()->format('y');
        $cl =  $request->class;
        if($cnt>0 && $last->year==$n)
           {
            $last_digit = $last->id_no%1000+1;
            if($cl<10) {
                $dt = $dt*10;
            }
            $dtcl = $dt.$cl;
            $data->id_no = $dtcl*10000+$last_digit;
           }
        else{
            $dtcl = $dt.$cl;
            $data->id_no = $dtcl*10000;
        }

        // dd($data->id_no);
        // $data = Shift::create($request->all());


    
        // $c=Shift::count();
    // if($c==0){
    //     $dt = (int)Carbon::now()->format('Y');

    //     $data->id_no =10;
    // }
    // elseif($c>=1){
    //     $last= DB::table('shifts')->latest()->first();

    //     $n = Carbon::now()->format('Y');

    //      if($last->year==$n)
    //        { 

    //         $data->id_no =$last->id_no+1;

    
    //        }
    
    //        elseif($last->year!=$n){
    
    //            $dt = (int)Carbon::now()->format('Y');

    //            $data->id_no = 20;

    //        }
    
    //     }
       

    // $last= DB::table('shifts')->latest('year')->first();

    //     $n = Carbon::now()->format('Y');

        //  if($last->year==$n){
        //     $dt = (int)Carbon::now()->format('y');
        //     $di=$data->id_no;
        //     $data->id_no = $dt.$di;
        //  }

        //  $dt = (string)Carbon::now()->format('y');
        //  $di=$data->id_no;
        //  $data->id_no = $dt.$di;
  
        $data->year = Carbon::now()->format('Y');
        $data->name=$request->name;
        
        
        $data->save();
        
        $notification = array(
            
           'message' => 'Shift Imserted Successfully',
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
        $data['alldata'] = shift::all();
        $data['editdata'] = shift::find($id);



        return view('superadmin.backend.academic.view_shift',$data);
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
        $data = Shift::findOrFail($id);        
        $input = $request->all();
        $action = $data->update($input);

        $alldata['alldata'] = shift::all();


    
        $notification = array(
            
            'message' => 'Shift Updated Successfully',
            'alert-type' => 'success'

        );


        return redirect()->route('manage-shift.index')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = shift::findOrFail($id);
        $action = $data->delete();



        $notification = array(
            
            'message' => 'Shift Deleted Successfully',
            'alert-type' => 'success'
        
        );



        return redirect()->back()->with($notification);  
    }
}
