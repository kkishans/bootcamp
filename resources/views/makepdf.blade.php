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
</head>
<body>

<script type="text/javascript">
	window.onload = function() 
{
  HTMLtoPDF();
};
</script>

<div id="H">
<table width="60%" align="center" class="text-center" cellpadding="10" border="1" id="HTMLtoPDF" >
	<tr>
		<th colspan="4">
			 <h1>Registration Confirmation Letter</h1>
		</th>
	</tr>
	<tr>
		<td  colspan="4">
			<h3>YashClasses, Bharuch</h3>
		</td>
	</tr>
	<tr>
		<td  align="left" colspan="2">
			Date : {{ date('d/m/y')}}
		</td>
		<td align="right" colspan="2">
			Sr No. : {{ date('yy').$student['sid']}}
		</td>
	</tr>
	<tr>
		<td colspan="4">
			<label>Name : {{ $student['fname']}} {{ $student['lname']}}</label>
		</td>
	</tr>
	<tr>
		<td colspan="4">
			Course :  {{ $student['course']}} {{ $student['sem']}} Sem
		</td>
	</tr>
	<tr>
		<td colspan="4">
			E-mail : {{ $student['email'] }}
		</td>
	</tr>
	<tr>
		<td colspan="4">
			Phone :{{ $student['phone'] }}
		</td>
	</tr>
	<tr>
		<td colspan="4">
			Language :  {{ $student['language'] }}
		</td>
	</tr>
</table>
</div>

</body>
</html>