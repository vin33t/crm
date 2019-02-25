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
	                <div class="table-responsive">
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
	                </div>
	  			</div>
			</div>
            <div class="text-center">
            	{{-- <a href="{{route('employee.create')}}" class="btn btn-xs btn-primary">Create Employee</a> --}}
            	<button type="button" class="btn btn-xs btn-primary" data-toggle="modal" data-target="#exampleModalCenter">Create Employee</button>
  
            </div>
		</div>
	</div>
         
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" >
  <div class="modal-dialog modal-dialog-centered" role="document" >
    <div class="modal-content" >
      <div class="modal-header bg-light" >
        <h5 class="modal-title" id="exampleModalLongTitle" ><strong>Create New Employee!</strong></h5>
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{route('employee.store')}}" method="post" >
      @csrf
      <div class="modal-body" >
      	  <label for="name" class="pull-left"><strong>Employee Name:</strong></label>
          <input type="text" name="name" class="form-control" required>
          <label for="email" class="pull-left"><strong>Email:</strong></label>
          <input type="email" name="email" class="form-control" required>
          <label for="phone" class="pull-left"><strong>Phone:</strong></label>
          <input type="textl" name="phone" class="form-control" required>
      </div>
      <div class="modal-footer bg-light" >
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-info">Add Employee</button>
      </div>
    </form>
    </div>
  </div>
</div>

@stop