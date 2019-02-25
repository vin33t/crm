@extends('layouts.frontend')
@section('header')
    <div class="page-bar">
        <div class="page-title-breadcrumb">
            <div class=" pull-left">
                <div class="page-title">Employees</div>
            </div>
            <ol class="breadcrumb page-breadcrumb pull-right">
                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="{{route('home')}}">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                </li>
                <li class="active">Employees</li>
            </ol>
        </div>
    </div>
@stop
@section('content')

    <div class="row">
        <div class="col-md-12">
        	<div class="card card-box">
	            <div class="card-body ">
	                
	  			</div>
			</div>
            <div class="text-center">
            	<a href="" class="btn btn-xs btn-primary">Add Employee</a>
            </div>
		</div>
	</div>
         


@stop