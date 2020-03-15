@extends('layouts.app')

@section('content')
<div class="container" id="#personal" >
		<form action="{{ route('student.store') }}" method="post">
		{{ csrf_field() }}
			<div align="center">
				<div class="card col-md-12 col-sm-10 col-xl-6 col-lg-6 justify-content-center">
					<div class="card-head">
						Register Today!
					</div>				
				<div class="card-body">
					<div class="form-group row">

					<div class="col-md-6 col-sm-12">
			         	<input type="text" name="fname"  class="form-control" required autofocus placeholder="First Name">
			 		</div>   
			 		<div class="col-md-6 col-sm-12">
			          		<input type="text"  class="form-control" name="lname" required placeholder="Last Name">
			   		 </div>
			    </div>
				
				<div class="form-group">
		            <select class="form-control">
					<option hidden >Courses</option>
					<option> B.Sc </option>
					<option> B.C.A </option> 
					</select>
				</div>
			<div class="form-group">
		            <select class="form-control">
					<option hidden >Semester</option>
					<option> First </option>
					<option> Second </option> 
					<option> Third </option> 
					<option> Fourth </option> 
					<option> Fifth </option> 
					<option> Second </option> 
					</select>
			</div>
		    
		    	<div class="form-group">
		       
		         		<input type="text" class="form-control" name="mobnum" required placeholder="Mobile No">
		         	</div>
		         	

		         	<div class="form-group">
						<textarea class="placeholder-input form-control" placeholder="Address" required style="max-height: 66px; min-height: 66px;"></textarea>
					</div>
		         	
		            <div class="form-group">
		         
		         		<input type="text"  class="form-control" name="mail" required placeholder="Email Id">	
		         	</div>
		         	<div class="int font-weight-bold font-italic m-sm-3 text-left">
		         		<blockquote class="blockquote font-weight-bold text-left">
		 					 <p class="mb-0">Interest In:</p>
						</blockquote>
						<div class="form-check">
						  <label class="form-check-label">
						    <input type="radio" class="form-check-input" name="optradio">C,C++ (14 Days)
						  </label>
						</div>
						<div class="form-check">
						  <label class="form-check-label">
						    <input type="radio" class="form-check-input" name="optradio">HTML5, CSS3, JAVASCRIPT (14 Days)  <a class="" data-toggle="tooltip" data-placement="right" title="Basic"><i class="fa fa-question-circle-o" aria-hidden="true"></i></a>
						  </label>
						</div>
						<div class="form-check">
						  <label class="form-check-label">
						    <input type="radio" class="form-check-input" name="optradio" >Python (14 Days)
						  </label>
						</div>
						<div class="form-check">
						  <label class="form-check-label">
						    <input type="radio" class="form-check-input" name="optradio" >JQUERY, AJAX (14 Days)  <a  data-toggle="tooltip" data-placement="right" title="Advance"><i class="fa fa-question-circle-o" aria-hidden="true"></i></a>
						  </label>
						</div>
		         	</div>
		       
		         	<div class="form-check-inline row">
		         	
					  <label class="form-check-label text-dark ">
					    <input type="checkbox" class="form-check-input" value=""> <samp><kbd>I want to Join Yash's Coding Bootcamp Whatsapp Group</kbd></samp>
					  </label>
					</div>
					<br><br>
		         	<div class="form-group">
		         		<input type="submit" class="btn-info form-control" name="join" value="Join">  
		            </div>
            </div>
        </div>
    </div>
  </form>
</div>

</body>
</html>

@endsection