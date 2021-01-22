<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicle;
class ApiController extends Controller
{
    public function getAllVehicle() {
        $vehicle = Vehicle::get()->toJson(JSON_PRETTY_PRINT);
        return response($vehicle, 200);
      }
  
      public function createVehicle(Request $request) {
        $request->validate([
            'name'              =>  'required',
            'vehical_no'  =>    'required',
            'rcbook'  =>      'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'insurance'  =>      'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'tax'  =>      'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'puc'  =>      'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'fitness'  =>      'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);


        $vehicle = new Vehicle;
        $vehicle->name = $request->input('name');
        $vehicle->vehical_no = $request->input('vehical_no');
        $vehicle->einsurance = $request->input('einsurance');
        $vehicle->etax = $request->input('etax');
        $vehicle->epuc = $request->input('epuc');
        $vehicle->efitness = $request->input('efitness');

        if($request->file('rcbook')){
            $profile = $request->file('rcbook');
            $file_name = time() . '.' . $profile->getClientOriginalExtension();
            $path = public_path('../uploads/rcbook');
            $profile->move($path, $file_name);
            $vehicle->rcbook = $file_name;
        }
        if($request->file('insurance')){
            $profile = $request->file('insurance');
            $file_name = time() . '.' . $profile->getClientOriginalExtension();
            $path = public_path('../uploads/insurance');
            $profile->move($path, $file_name);
            $vehicle->insurance = $file_name;
        }
        if($request->file('tax')){
            $profile = $request->file('tax');
            $file_name = time() . '.' . $profile->getClientOriginalExtension();
            $path = public_path('../uploads/tax');
            $profile->move($path, $file_name);
            $vehicle->tax = $file_name;
        }
        if($request->file('fitness')){
          $profile = $request->file('fitness');
          $file_name = time() . '.' . $profile->getClientOriginalExtension();
          $path = public_path('../uploads/fitness');
          $profile->move($path, $file_name);
          $vehicle->fitness = $file_name;
      }
      if($request->file('puc')){
          $profile = $request->file('puc');
          $file_name = time() . '.' . $profile->getClientOriginalExtension();
          $path = public_path('../uploads/puc');
          $profile->move($path, $file_name);
          $vehicle->puc = $file_name;
      }
        $vehicle->save();
        return response()->json([
            "message" => "vehicle record created"
        ], 201);
      }
  
      public function getVehicle($id) {
        if (Vehicle::where('id', $id)->exists()) {
            $vehicle = Vehicle::where('id', $id)->get()->toJson(JSON_PRETTY_PRINT);
            return response($vehicle, 200);
          } else {
            return response()->json([
              "message" => "Vehicle not found"
            ], 404);
          }
      }
  
      public function updateVehicle(Request $request, $id) {


        
        if (Vehicle::where('id', $id)->exists()) {
            $vehicle = Vehicle::find($id);
    
            $vehicle->name = is_null($request->name) ? $vehicle->name : $request->name;
            $vehicle->vehical_no = is_null($request->vehical_no) ? $vehicle->vehical_no : $request->vehical_no;
            $vehicle->einsurance = is_null($request->einsurance) ? $vehicle->einsurance : $request->einsurance;
            $vehicle->etax =is_null($request->etax) ? $vehicle->etax : $request->etax;
            $vehicle->epuc = is_null($request->epuc) ? $vehicle->epuc : $request->epuc;
            $vehicle->efitness =is_null($request->efitness) ? $vehicle->efitness : $request->efitness;
            if($request->file('rcbook')){
                $profile = $request->file('rcbook');
                $file_name = time() . '.' . $profile->getClientOriginalExtension();
                $path = public_path('../uploads/rcbook');
                $profile->move($path, $file_name);
                $vehicle->rcbook = $file_name;
            }
            if($request->file('insurance')){
                $profile = $request->file('insurance');
                $file_name = time() . '.' . $profile->getClientOriginalExtension();
                $path = public_path('../uploads/insurance');
                $profile->move($path, $file_name);
                $vehicle->insurance = $file_name;
            }
            if($request->file('tax')){
                $profile = $request->file('tax');
                $file_name = time() . '.' . $profile->getClientOriginalExtension();
                $path = public_path('../uploads/tax');
                $profile->move($path, $file_name);
                $vehicle->tax = $file_name;
            }
            if($request->file('fitness')){
              $profile = $request->file('fitness');
              $file_name = time() . '.' . $profile->getClientOriginalExtension();
              $path = public_path('../uploads/fitness');
              $profile->move($path, $file_name);
              $vehicle->fitness = $file_name;
          }
            if($request->file('puc')){
                $profile = $request->file('puc');
                $file_name = time() . '.' . $profile->getClientOriginalExtension();
                $path = public_path('../uploads/puc');
                $profile->move($path, $file_name);
                $vehicle->puc = $file_name;
            }
          
            $vehicle->save();
    
            return response()->json([
              "message" => "records updated successfully"
            ], 200);
          } else {
            return response()->json([
              "message" => "Vehicle not found"
            ], 404);
          }
      }
  
      public function deleteVehicle($id) {
        if(Vehicle::where('id', $id)->exists()) {
            $vehicle = Vehicle::find($id);
            $vehicle->delete();
    
            return response()->json([
              "message" => "records deleted"
            ], 202);
          } else {
            return response()->json([
              "message" => "Vehicle not found"
            ], 404);
          }
      }
}
