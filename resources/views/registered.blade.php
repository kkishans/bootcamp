@extends('layouts.app')

@section('head')
 <script src="{{ asset('js/myscript.js') }}" defer></script>
	 <script src="{{ asset('js/all.js') }}" defer></script>
	 <script src="{{ asset('js/jspdf.js') }}" defer></script>
<script type="text/javascript">

 
</script>
@endsection

@section('content')

<div class="container" align="center">
<div class="card col-11 text-center">
<div >
	<h2>Register Sucessfully</h2>
</div>
				 <h2>Registration Confirmation Letter</h2>
				 <h4>YashClasses, Bharuch</h4>
<div id="HTMLtoPDF">
<table width="60%" align="center" class="text-center" cellpadding="10" border="1">
	
	<tr>
		<td  align="left" colspan="2">
			Date : {{ date('d/m/y')}}
		</td>
		<td align="right" colspan="2">
			Sr No. : {{ date('yy').$data['sid']}}
		</td>
	</tr>
	<tr>
		<td colspan="4">
			<label>Name : {{ $data['fname']}} {{ $data['lname']}}</label>
		</td>
	</tr>
	<tr>
		<td colspan="4">
			Course :  {{ $data['course']}} {{ $data['sem']}} Sem
		</td>
	</tr>
	<tr>
		<td colspan="4">
			E-mail : {{ $data['email'] }}
		</td>
	</tr>
	<tr>
		<td colspan="4">
			Phone :{{ $data['phone'] }}
		</td>
	</tr>
	<tr>
		<td colspan="4">
			Language :  {{ $data['language'] }}
		</td>
	</tr>
</table>
</div>

<br><br>


<div class="col-sm-12">
	<a href=" {{ route('student.show',$data['email'])}}" class="btn btn-primary" >Download</a>
</div><br>
<div class="col-sm-3\12">
	<a href="/" class="btn btn-primary">Go To Home</a>
</div><br>
</div>
</div>

@endsection