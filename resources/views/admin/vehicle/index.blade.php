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
        <h3 class="breadcrumb-header"> Vehicle Manage</h3>
        <a href="{{route('vehicles.create')}}" class="cstm-btn btn btn-primary">Add Vehicle </a>
    </div>
    <div id="main-wrapper">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-white">
                    <div class="panel-body">
                        <div class="add-expertise">
                          
                        </div>
                    
                        <div class="table-responsive cstm-data-table">
                            <table id="example" class="display table" style="width: 100%; cellspacing: 0;">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Vehicle Number</th>
                                        <th>RC Book</th> 
                                        <th>Insurance File</th> 
                                        <th>Tax File</th> 
                                        <th>Action</th> 
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($vehicle as $v)
                                    <tr role="row" class="odd">
                                        <td class="sorting_1">{{$v->name}}</td>
                                        <td class="sorting_1">{{$v->vehical_no}}</td>
                                        <td class="sorting_1"> <img src="{{asset('uploads/rcbook/' . $v->rcbook) }}" /></td>
                                        <td class="sorting_1"><img src="{{asset('uploads/insurance/' . $v->insurance)}}" /></td>
                                        <td class="sorting_1"><img src="{{asset('uploads/tax/' . $v->tax) }}" /></td>





                                        <td>
                                            <div class="action-btn">
                                                <button class="btn btn-success edit-btn">
                                                    <a class=""
                                                        href="{{route('vehicles.edit', ['vehicle' => $v->id])}}">
                                                        <i class="fa fa-pencil" aria-hidden="true"></i>
                                                        <img src="{{url('/')}}/assets/images/edit-icon.svg" alt="">
                                                    </a>
                                                </button> 

                                
                                                <button type="submit" class="btn btn-danger btn-sm delete-confirm" data-id="{{$v->id}}" data-name="{{ $v->name }}">de</button>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('additionalscripts')


@endsection