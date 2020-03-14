@extends('layouts.app')

@section('content')

<div class="container" id="#personal" >
		<form action="#course" >
			<div align="center">
				<div class="card col-md-12 col-sm-10 col-xl-6 col-lg-6 justify-content-center">
					<div class="card-head">
						Register Your Information
					</div>				
					<div class="card-body">
						<div class="form-group row">
							<label class="col-sm-3 col-form-label label">Name : </label>
							<div class="input-group col-sm-9">								
							<input type="text" class="form-control textbox" name="fname" placeholder="first name" required="">
							<input type="text" class="form-control textbox" name="lname" placeholder="last name" required="">

							</div>
						</div>

						<div class="form-group row">
							<label class="col-sm-3 col-form-label label">Course : </label>
							<div class="input-group col-sm-9">	
							<select class="custom-select textbox">
						  		<option selected>B Sc</option>
						  		<option >B C A</option>
							</select>
						</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-3 col-form-label label">Semester : </label>
							<div class="input-group col-sm-9">	
							<select class="custom-select textbox">
						  		<option selected>1</option>
						  		<option >2</option>
						  		<option >3</option>
						  		<option >4</option>
						  		<option >5</option>
						  		<option >6</option>
							</select>
						</div>
						</div>
						
						<div class="form-group row">
							<label class="col-sm-3 col-form-label label">Address :</label>
							<div class="input-group col-sm-9">	
							<textarea  class="form-control textbox" name="phone" placeholder="your address"  ></textarea>
							</div>
						</div>

						<div class="form-group row">
							<label class="col-sm-3 col-form-label label">Contact :</label>
							<div class="input-group col-sm-9">	
							<input type="number" class="form-control textbox" name="phone" placeholder="phone number" minlength="10"  size="10"  required="" >
							</div>
						</div>

						<div class="form-group row">
							<label class="col-sm-3 col-form-label label">E-mail :</label>
							<div class="input-group col-sm-9">	
							<input type="text" class="form-control textbox" name="mail" placeholder="e-mail address" required="" >
						</div>
						</div>

						<div class="row col-12 form-check text-left text-center">
							  <input class="form-check-input" type="checkbox" name="group_val" value="1">
							  <label class="form-check-label from">
							   Join me on YassClasses's Whatsup Group
							  </label>
							 
						</div>

						<div class="form-group col-12  row">
							
							<input type="submit" class="w-100 nav-btn" name="save" placeholder="e-mail address" value="Save & Next" required="">
							<br><br>
						</div>
					</div>
				</div>
			</div>
		</form>

@endsection