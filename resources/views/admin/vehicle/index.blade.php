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
                                        <th>Action</th> 
                                        <th>Name</th>
                                        <th>Vehicle Number</th>
                                        <th>RC Book</th> 
                                        <th>Insurance File</th> 
                                        <th>Insurance Expiry Date</th>
                                        <th>Tax File</th>
                                        <th>Tax Expiry Date</th>  
                                        <th>Fitness Image</th>
                                        <th>Fitness Expiry Date</th>
                                        <th>PUC Image</th>
                                        <th>PUC Expiry Date</th>
                                       
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($vehicle as $v)
                                    <tr role="row" class="odd">
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
                                        <td class="sorting_1">{{$v->name}}</td>
                                        <td class="sorting_1">{{$v->vehical_no}}</td>
                                        <td class="sorting_1"><img src="{{asset('uploads/rcbook/' . $v->rcbook) }}" /><a href="{{asset('uploads/rcbook/' . $v->rcbook) }}" class="btn btn-outline-warning" download>Download </a></td>
                                        <td class="sorting_1"><img src="{{asset('uploads/insurance/' . $v->insurance)}}" /><a href="{{asset('uploads/insurance/' . $v->insurance) }}" class="btn btn-outline-warning" download>Download </a></td>
                                        <td class="sorting_1">{{$v->einsurance}}</td>
                                        <td class="sorting_1"><img src="{{asset('uploads/tax/' . $v->tax) }}" /><a href="{{asset('uploads/tax/' . $v->tax) }}" class="btn btn-outline-warning" download>Download </a></td>
                                        <td class="sorting_1">{{$v->etax}}</td>
                                        <td class="sorting_1"><img src="{{asset('uploads/fitness/' . $v->fitness) }}" /><a href="{{asset('uploads/fitness/' . $v->fitness) }}" class="btn btn-outline-warning" download>Download </a></td>
                                        <td class="sorting_1">{{$v->efitness}}</td>
                                        <td class="sorting_1"><img src="{{asset('uploads/puc/' . $v->puc) }}" /><a href="{{asset('uploads/puc/' . $v->puc) }}" class="btn btn-outline-warning" download>Download </a></td>
                                        <td class="sorting_1">{{$v->epuc}}</td>




                                        
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