@extends('layouts.frontend')
@section('header')
    <div class="page-bar">
        <div class="page-title-breadcrumb">
            <div class=" pull-left">
                <div class="page-title">Clients</div>
            </div>
            <ol class="breadcrumb page-breadcrumb pull-right">
                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="{{route('home')}}">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                </li>
                <li class="active">Clients</li>
            </ol>
        </div>
    </div>
@stop
@section('content')

    <div class="row">
        <div class="col-md-12">
        	<div class="card card-box">
	            <div class="card-body ">
	                {{-- <div class="table-responsive">
	                    <table class="table table-striped custom-table table-hover">
	                        <thead >
	                            <tr>
	                                <th>Name</th>
	                                <th>Email</th>
	                                <th>Phone</th>
	                            </tr>
	                        </thead>
	                        <tbody  >
	                        	@if($employees->count()>0)
	                        	@foreach($employees as $employee)
	                            	<tr>
	                                	<td>{{$employee->name}}</td>
	                                	<td>{{$employee->email}}</td>
	                                	<td>{{$employee->phone}}</td>
	                            	</tr>
	                            @endforeach
	                            @endif
	                        </tbody>
	                    </table>
	                    @if(!$employees->count()>0)
	                    	<div class="text-center" >
	                    		<strong>No Records!!</strong>
	                    	</div>
	                    @endif
	                </div> --}}
	  			</div>
			</div>
            <div class="text-center">
            	<a href="{{route('client.create')}}" class="btn btn-xs btn-primary">Create Client</a>
            </div>
		</div>
	</div>


@stop