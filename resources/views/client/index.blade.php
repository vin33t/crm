@extends('layouts.frontend')
@section('title')
Clients
@stop
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
	                <div class="table-responsive">
	                    <table class="table table-striped custom-table table-hover">
	                        <thead >
	                            <tr>
	                                <th>Name</th>
	                                <th>Email</th>
	                                <th>Country</th>
	                                <th>Mobile</th>
	                                <th>DOB</th>
	                                <th>Occupation</th>
	                                <th>Status</th>
	                                @if(Auth::user()->admin)
	                                <th>Action</th>
	                                @endif
	                            </tr>
	                        </thead>
	                        <tbody  >
	                        	@if($clients->count()>0)
	                        	@foreach($clients as $client)
	                            	<tr>
	                                	<td>{{$client->first_name.' '.$client->last_name}}</td>
	                                	<td>{{$client->email}}</td>
	                                	<td>{{$client->country}}</td>
	                                	<td>{{$client->mobile}}</td>
	                                	<td>{{$client->DOB}}</td>
	                                	<td>{{$client->occupation}}</td>
	                                	<td>
	                                		@if($client->verified)
	                                			<span class="text-success">Verified</span>
	                                		@else
	                                			<a href="{{route('verifyAgain',['id'=>$client->id])}}" class="btn btn-warning btn-xs">Send Verification Again</a>
	                                		@endif
	                                	</td>
	                                	@if(Auth::user()->admin)
	                                	<td>
	                                		<a href="{{route('client.edit',['id'=>$client->id])}}" class="btn btn-xs btn-info"><i class="fa fa-edit"></i></a>
	                                		<a href="{{route('client.destroy',['id'=>$client->id])}}" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i></a>
	                                	</td>
	                                	@elseif (!Auth::user()->admin and $client->verified == 0)
										<td>
	                                		<a href="{{route('client.edit',['id'=>$client->id])}}" class="btn btn-xs btn-info"><i class="fa fa-edit"></i></a>
	                                	</td>
	                                	@endif
	                            	</tr>
	                            @endforeach
	                            @endif
	                        </tbody>
	                    </table>
	                    @if(!$clients->count()>0)
	                    	<div class="text-center" >
	                    		<strong>No Records!!</strong>
	                    	</div>
	                    @endif
	                </div>
	  			</div>
			</div>
            <div class="text-center">
            	<a href="{{route('client.create')}}" class="btn btn-xs btn-primary">Create Client</a>
            </div>
		</div>
	</div>


@stop