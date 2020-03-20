<!DOCTYPE html>
<html>
<head>
	<title>Registration Ticket</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"><script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	 

</head>
<body>


<div>
	<div style="text-align: center;">
			 <h1 align="center">Registration Confirmation Letter</h1>
			<h3 align="center">YashClasses, Bharuch</h3>
	</div>
	<div style="margin-top:3rem;">
		<h6>Date : {{ date('d/m/y')}}</h6>
		<h6>Sr No.   : {{ date('yy').$student['sid']}}</h6>
	</div>
	<div style="margin-left: 13rem;margin-top:2rem;">
		
		<p><b>Name    &nbsp; :</b> &nbsp;&nbsp;{{ $student['fname']}} {{ $student['lname']}}</p>
		<p><b>Course   :</b> &nbsp; {{ $student['course']}} {{ $student['sem']}} Sem</p>
		<p><b>E-mail   &nbsp;:</b> &nbsp;&nbsp;{{ $student['email'] }}</p>
		<p><b>Mobile   :</b> &nbsp;&nbsp;{{ $student['phone'] }}</p>
		<p><b>Language :</b> {{ $student['language'] }}</p>
	<div>
</div>


</body>

</html>