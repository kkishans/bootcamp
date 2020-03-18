@extends('layouts.app')

@section('content')

<div class="container" align="center">
<div class="card col-5 text-center">
<div >
	<h2>Register Sucessfully</h2>
</div>
<div class="col-sm-12">
	<a href="{{ route('student.show',$email)}}" class="btn btn-primary">Download</a>
</div><br>
<div class="col-sm-3\12">
	<a href="/" class="btn btn-primary">Go To Home</a>
</div><br>
</div>
</div>

@endsection