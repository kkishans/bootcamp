<!DOCTYPE html>
<html>
<head>
	<title>Registration Ticket</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"><script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	 <script src="{{ asset('js/myscript.js') }}" defer></script>
	 <script src="{{ asset('js/all.js') }}" defer></script>
	 <script src="{{ asset('js/jspdf.js') }}" defer></script>

<script type="text/javascript">
	window.onload = function() 
{
  HTMLtoPDF();
};
</script >
</head>
<body id="HTMLtoPDF">


<div>
	<div style="text-align: center;">
			 <h1 align="center">Registration Confirmation Letter</h1>
			<h3 align="center">YashClasses, Bharuch</h3>
	</div>
	<div style="margin-left: 10rem;">
		<p>	Date : {{ date('d/m/y')}}</p>
		<p>Sr No.   : {{ date('yy').$student['sid']}}</p>
		<p>Name     : {{ $student['fname']}} {{ $student['lname']}}</p>
		<p>Course   : {{ $student['course']}} {{ $student['sem']}} Sem</p>
		<p>E-mail   : {{ $student['email'] }}</p>
		<p>Phone    : {{ $student['phone'] }}</p>
		<p>Language : {{ $student['language'] }}</p>
	<div>
</div>


</body>

</script>
</html>