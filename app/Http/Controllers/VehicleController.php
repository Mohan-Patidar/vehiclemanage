<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use Illuminate\Http\Request;

use Session;    
class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {    
        $vehicle = Vehicle::get();
        return view("admin.vehicle.index",compact("vehicle"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.vehicle.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         // file validation
        $request->validate([
            'name'              =>  'required',
            'vehical_no'  =>    'required',
            'rcbook'  =>      'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'insurance'  =>      'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'tax'  =>      'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);


        $vehicle = new Vehicle;
        $vehicle->name = $request->input('name');
        $vehicle->vehical_no = $request->input('vehical_no');

        if($request->file('rcbook')){
            $profile = $request->file('rcbook');
            $file_name = time() . '.' . $profile->getClientOriginalExtension();
            $path = public_path('/uploads/rcbook');
            $profile->move($path, $file_name);
            $vehicle->rcbook = $file_name;
        }
        if($request->file('insurance')){
            $profile = $request->file('insurance');
            $file_name = time() . '.' . $profile->getClientOriginalExtension();
            $path = public_path('/uploads/insurance');
            $profile->move($path, $file_name);
            $vehicle->insurance = $file_name;
        }
        if($request->file('tax')){
            $profile = $request->file('tax');
            $file_name = time() . '.' . $profile->getClientOriginalExtension();
            $path = public_path('/uploads/tax');
            $profile->move($path, $file_name);
            $vehicle->tax = $file_name;
        }
        $vehicle->save();

        Session::flash('message-profile', 'Profile image updated successfuly!');
       
       
        return redirect('vehicles');


    }
    
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function show(Vehicle $vehicle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function edit($v)
    {
        $vehicle = Vehicle ::where("id", "=", $v)->first();
    
        return view('admin.vehicle.edit',compact('vehicle'));   
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name'              =>  'required',
            'vehical_no'  =>    'required',
            'rcbook'  =>      'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'insurance'  =>      'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'tax'  =>      'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $vehicle =Vehicle::where("id", "=", $id)->first();
        $vehicle->name = $request->input('name');
        $vehicle->vehical_no = $request->input('vehical_no');

        if($request->file('rcbook')){
            $profile = $request->file('rcbook');
            $file_name = time() . '.' . $profile->getClientOriginalExtension();
            $path = public_path('/uploads/rcbook');
            $profile->move($path, $file_name);
            $vehicle->rcbook = $file_name;
        }
        if($request->file('insurance')){
            $profile = $request->file('insurance');
            $file_name = time() . '.' . $profile->getClientOriginalExtension();
            $path = public_path('/uploads/insurance');
            $profile->move($path, $file_name);
            $vehicle->insurance = $file_name;
        }
        if($request->file('tax')){
            $profile = $request->file('tax');
            $file_name = time() . '.' . $profile->getClientOriginalExtension();
            $path = public_path('/uploads/tax');
            $profile->move($path, $file_name);
            $vehicle->tax = $file_name;
        }
        $vehicle->update();

        Session::flash('message-profile', 'Vehicle data  updated successfuly!');
       
       
        return redirect('vehicles');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function destroy(request $request)
    {
        $id = $request->all();
        Vehicle::destroy($id);
    }
}
