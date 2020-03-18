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


	<div align="center" class="col-12 justify-content-center" >
    <h1>Registration Confirmation Letter</h1>
    <h3>YashClasses, Bharuch</h3>
    <br>
    	<div class="row col-8">
    				<h5 >Registered Date : </h5>
    		 		<label>  {{ "  ".date('d/m/y') }}</label><br>
    	</div> 
    <form class="form-group text-center col-8" align="center" style="border:1px solid black;">
    	<div class="row">
    				<h5 class="col-6 text-right">Name :</h5>
    		 		<label  class="col-6 text-left" > {{ $student['fname']}} {{ $student['lname']}}</label><br>
    			</div>
    			<div class="row">
    				<h5 class="col-6 text-right">Course :</h5>
    		 		<label  class="col-6 text-left" > {{ $student['course']}} {{ $student['sem']}} Sem</label><br>
    			</div>
    			<div class="row">
    				<h5 class="col-6 text-right">Email :</h5>
    		 		<label  class="col-6 text-left" > {{ $student['email'] }}</label><br>
    			</div> 
    			<div class="row">
    				<h5 class="col-6 text-right">Phone :</h5>
    		 		<label  class="col-6 text-left" > {{ $student['phone'] }}</label><br>
    			</div>
    	</form>  
    </div>
</body>
</html>