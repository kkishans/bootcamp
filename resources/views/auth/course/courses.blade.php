@extends('layouts.app')

@section('content')
<br>
<div class="container"  >
    <div align="center" >
	      <div class="card col-md-12 col-sm-10 col-xl-9 col-lg-9 justify-content-center text-center">
	      	<br>
	<div class="row">	
		<br>
			<div class="col-8"> <h1>All Courses</h1></div>
			<div class="col-sm-3 text-right">
				<a class="btn btn-outline-primary " href="{{ route('course.create')}}" >Add Course </a>
			</div>
			</div>	
			
<div class="card-body">
	<table class="table table-striped ">
		@if(sizeof($courses) > 0)
			<tr>
				<th>Course Id</th>
				<th>Course Name</th>
				<th>Update</th>
				<th>delete</th>
			</tr>
			@foreach($courses as $c)

			<tr>
				<td>{{$c->cid}}</td>
				<td>{{ $c->cname}}</td>
				<td><a class="btn btn-outline-success" href="{{ route('course.edit',$c->cid)}}">Update</a></td>
				<td>
					<form action="{{ route('course.destroy', $c->cid)}}" method="post">
	                   {{ csrf_field() }}
	                  {{method_field('DELETE')}}
	                    
	                  <button class="btn btn-outline-danger" type="submit">Delete</button>
	                </form>
				</td>
			</tr>

			@endforeach
		@else
			<tr class="lead text-center col-3 " style="background-color: white;">
				
				<td>Please create any course First!</td>
				
			</tr>
		@endif
	</table>

	</div>
</div>
</div>
</div>
@endsection