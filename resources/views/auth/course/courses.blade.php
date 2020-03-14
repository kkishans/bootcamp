@extends('layouts.app')

@section('content')

<div class="card col-md-12 col-sm-10 col-xl-9 col-lg-9 justify-content-center text-center" align="center">
<br>
<div class="row">
	<div class="col-8"> <h1>All Courses</h1></div>
	<div class="col-sm-3 text-right">
		<a class="btn btn-outline-primary " href="{{ route('addcourse')}}" >Add Course </a>
	</div>
</div>


<div class="card-body">
	<table class="table table-bordered">
		
		<tr>
			<th>Course Id</th>
			<th>Course Name</th>
			<th>Update</th>
			<th>delete</th>
		</tr>
		@foreach($courses as $c)

		<tr>
			<td>{{$c['cid']}}</td>
			<td>{{ $c['cname']}}</td>
			<td><a class="btn btn-outline-success" href="{{ action('CourseController@edit',$c['cid']) }}">Update</a></td>
			<td><a class="btn btn-outline-danger">delete</a></td>
		</tr>

		@endforeach

	</table>

</div>
</div>
@endsection