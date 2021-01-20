@extends('layouts.adminlayout')

@section('content')

<div class="page-inner ad-inr">
    @if(Session::has('message'))
    <div class="alert alert-success alert-dismissible fade in" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                aria-hidden="true">×</span></button>
        <p>{{ Session::get('message') }}</p>
    </div>
    @endif
  
        <div class="page-title">
            <h3 class="panel-header">Edit Vehicle</h3>
            <a href="{{url('/vehicles')}}" class="cstm-btn btn btn-primary">
                < Back</a>
        </div>
          <div class="inr-page-sec">
        <div id="main-wrapper">
            <div class="row">
                <div class="col-md-12">
                  

                    <div class="panel panel-white">
                        
                        <div class="panel-body">
                            <form class="popup-box" method="Post"
                                action="{{route('vehicles.update',['vehicle' => $vehicle->id])}}"
                                enctype="multipart/form-data">
                                <input type="hidden" name="_method" value="PUT">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" placeholder="Vehicle Name" name="name" id="name" value="{{$vehicle->name}}" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Vehicle Number</label>
                                            <input type="text" id="vehical_no" placeholder="Vehicle Number" value="{{$vehicle->vehical_no}}" name="vehical_no" class="form-control ">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Select RC Book</label>
                                            <input type='file' required name="rcbook" accept=".png, .jpg, .jpeg" />
                                            <img src="{{asset('uploads/rcbook/' . $vehicle->rcbook) }}" />
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Select Insurance File</label>
                                            <input type='file' required name="insurance" accept=".png, .jpg, .jpeg" />
                                            <img src="{{asset('uploads/insurance/' . $vehicle->insurance)}}" />
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Select Tax File</label>
                                            <input type='file' required name="tax" accept=".png, .jpg, .jpeg" />
                                            <img src="{{asset('uploads/tax/' .$vehicle ->tax) }}" />
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="cstm-btn margin-top-15">Update Vehicle</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection