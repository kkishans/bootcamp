
@extends('layouts.app')

@section('content')
<br>
<div class="container"  >
    <div align="center" >
	      <div class="card col-md-12 col-sm-10 col-xl-9 col-lg-9 justify-content-center text-center">
	      	<br>
	<div class="row">	
		<br>
		<div class="col-8"> <h1>All Batches</h1></div>
		<div class="col-sm-3 text-right">
			<a class="btn btn-outline-primary " href="{{ route('batch.create')}}" >Add Batch </a>
		</div>
	</div>	
		
<div class="card-body">
	<table class="table table-striped ">
		@if(sizeof($batches) > 0)
						
			<tr>
				<th>Batch Id</th>
				<th>Total Seats</th>
				<th>Remaining Seats</th>
				<th>Time </th>
				<th>Course ID</th>
				<th>Update</th>
				<th>delete</th>
			</tr>
			@foreach($batches as $b)

			<tr>
				<td>{{$b['bid']}}</td>
				<td>{{ $b['total_seats']}}</td>
				<td>{{ $b['remaining_seats']}}</td>
				<td>{{ $b['batch_time']}}</td>
				<td>{{ $b['courseid']}}</td>
				<td><a class="btn btn-outline-success" href="{{ route('batch.edit',$b->bid)}}">Update</a></td>
				<td>
					<form action="{{ route('batch.destroy', $b->bid)}}" method="post">
	                   {{ csrf_field() }}
	                  {{method_field('DELETE')}}
	                    
	                  <button class="btn btn-outline-danger" type="submit">Delete</button>
	                </form>
				</td>
			</tr>

			@endforeach
		@else
			<tr class="lead text-center col-3 " style="background-color: white;">
				
				<td>Please create Batch First!</td>
				
			</tr>
		@endif
	</table>

	</div>
</div>
</div>
</div>
@endsection