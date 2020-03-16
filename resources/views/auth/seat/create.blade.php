<!-- create.blade.php -->
@extends('layouts.app')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="container"  >
    <div align="center">
      <div class="card col-md-12 col-sm-10 col-xl-6 col-lg-6 justify-content-center">
        <div class="card-header">
          Add Seat Matrix
        </div>
        <div class="card-body">
          @if ($errors->any())
            <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                  @endforeach
              </ul>
            </div><br />
          @endif
            <form method="post" action="{{ route('seat.store') }}">
                <div class="form-group text-center">
                    {{ csrf_field() }}
                    <div class="col-12 row">
                      <label class="col-sm-5">Course Name : </label>
                   <div class="form-group col-sm-7">
                      <select name="cname" class="form-control">
                        <option> B.Sc. </option>
                        <option> B.C.A. </option> 
                        </select>
                      </div>
                  </div>


                   <div class="col-12 row">
                      <label class="col-sm-5">Total Seats : </label>
                    <input type="number" class="form-control col-sm-7" name="total_seat" maxlength="15" min="1" size="15" required />
                  </div>
                    <br>      
                </div>
                
                <button type="submit" class="btn btn-primary">Add Seats Matrix</button>
            </form>
        </div>
      </div>
    </div>
  </div>
@endsection