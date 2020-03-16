
@extends('layouts.app')

@section('content')
<br>
<div class="container"  >
    <div align="center" >
	      <div class="card col-md-12 col-sm-10 col-xl-9 col-lg-9 justify-content-center text-center">
	      	<br>
	<div class="row">	
		<br>
		<div class="col-8"> <h1>Seat Matrix</h1></div>
		<div class="col-sm-3 text-right">
			<a class="btn btn-outline-primary " href="{{ route('seat.create')}}" >Add New Seat Matrix </a>
		</div>
	</div>	
		
<div class="card-body">
	<table class="table table-striped ">
		@if(sizeof($seats) > 0)
						
			<tr>
				<th>Course Name</th>
				<th>Total Seats</th>
				<th>up</th>
				<th>down</th>
				<th>available Seats</th>
				<th>Allocated Seats</th>
				
			</tr>
			@foreach($seats as $s)

			<tr>
				<td>{{$s['cname']}}</td>
				<td>{{ $s['total_seats']}}</td>
				<td><form action="seat/{{$s->s_id}}/up" >
	                   {{ csrf_field() }}
	                  {{method_field('PATCH')}}
	                    
	                  <button class="btn btn-outline-primary" type="submit"> &uarr;</button>
	                </form>
	            </td>
				<td><a href="#" class="btn btn-outline-info"> &darr;</a></td>
				<td>{{ $s['available_seats']}}</td>
				<td>{{ $s['allocated_seats']}}</td>

			</tr>

			@endforeach
		@else
			<tr class="lead text-center col-3 " style="background-color: white;">
				
				<td>Please create Seat Matrix First!</td>
				
			</tr>
		@endif
	</table>

	</div>
</div>
</div>
</div>
@endsection