@extends('layouts.app')

@section('head')

<style type="text/css">
	body{
		user-select: none;
	}
	.bhead{
		font-size: 20px;
		color: dodgerblue;
		color: gray;
	}
	.mydiv{
		border:1px solid white;
		border-radius: 10px;	
		background-color: #AEE2F5;
		color: white;
	}
	.mbtn{
		font-size: 30px;
		font-style: italic;
		background-color: #78CDFA;
		border-radius: 8px; 
		margin-top: 20px;
		color: white;
		cursor: pointer;
	}
	.mbtn:hover{
		color: #78CDFA;
		background-color: white;
		border: 1px solid #78CDFA;
		font-size: 31px;
	}
</style>
@endsection
@section('content')

<div class="container">
	<div class="row" style="border-radius: 8px;border:1px solid gray;padding:20px;">
		<div class="col-3">
			<h3 style="color: dodgerblue;">We will Learn</h3>
			<dl class="bhead">
				<dt>Basic Languages
					<dd><li>C/C++</li></dd></dt>
				<dt>Web Application</dt>
					<dd><li>HTML/CSS</li></dd>
					<dd><li>JS</li></dd>
				<dt>Advance Languages</dt>
					<dd><li>phthon</li></dd>
					<dd><li>PHP</li></dd>
					<dd><li>JAVA</li></dd>
					<dd><li>jQuery</li></dd>
				
			</dl>
		</div>
		<div class="col-9 text-center mydiv">
			<h1 >YashClasses Organized <br> Free Coding BootCamp To</h1>
			<hr>
			<p class="display-4">
				LEARN THE CODE <br> <u>THIS SUMMER</u> <br>
			</p>
			<h1 >
				AT THIS CODING CLASS
			</h1>
			<div class="container col-6 text-center">
    <a href="{{ route('registration')}}" class="btn mbtn col-12">Yes, I want to Join!</a>  
	</div>
		</div>
	</div>
</div>
	

<br><br>


@endsection