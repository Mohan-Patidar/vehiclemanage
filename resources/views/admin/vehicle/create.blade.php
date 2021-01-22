@extends('layouts.adminlayout')

@section('content')


<div class="page-inner ad-inr">
    @if(Session::has('message'))
    <div class="alert alert-success alert-dismissible fade in" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
        <p>{{ Session::get('message') }}</p>
    </div>
    @endif

    <div class="page-title">
        <h3 class="panel-header">Add Vehicle </h3>
        <a href="{{url('/vehicles')}}" class="cstm-btn btn btn-primary">
            < Back</a>
    </div>
    <div class="inr-page-sec">
        <div id="main-wrapper">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-white">

                        <div class="panel-body" class="center hideform">
                            <form  method="Post" action="{{route('vehicles.store')}}" enctype="multipart/form-data" >

                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" placeholder="Vehicle Name" name="name" id="name" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Vehicle Number</label>
                                            <input type="text" id="vehical_no" placeholder="Vehicle Number" name="vehical_no" class="form-control ">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Vehicle Number</label>
                                            <input type='file' required name="rcbook" accept=".png, .jpg, .jpeg" />
                                            <label for="file">Select RC Book</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                        <label>Insurance File</label>
                                            <input type='file' id="file"  required name="insurance" accept=".png, .jpg, .jpeg" />
                                            <label for="file">Select Insurance File</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                        <label>Tax File</label>
                                            <input type='file' required name="tax" accept=".png, .jpg, .jpeg" />
                                            <label for="file">Select Tax File</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Insurance Expiry Date</label>
                                            <input type='date' required name="tax" accept=".png, .jpg, .jpeg" />
                                            <label for="file">Select Insurance Expiry Date</label>
                                        </div>
                                    </div>

                                </div>
                                <button type="submit" class="cstm-btn margin-top-15">Add Vehicle</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection