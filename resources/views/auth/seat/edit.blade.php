<!-- edit.blade.php -->

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
        Edit Seats
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
          <form method="post" action="{{ route('seat.update', $seat->s_id) }}">
              <div class="form-group">
                   {{ csrf_field() }}
                  {{method_field('PATCH')}}

                   <div class="col-12 row">
                      <label class="col-sm-3">Course Name : </label>
                    <input type="number" class="form-control col-sm-9" name="cname"  value="{{ $seat->cname}}" required />
                  </div>

                   <div class="col-12 row">
                      <label class="col-sm-3">Total Seats : </label>
                    <input type="number" class="form-control col-sm-9" name="total_seat" maxlength="15" min="1" size="15" value="{{ $seat->remaining_seats}}" required />
                  </div>
                    <br>
                     <div class="col-12 row">
                      <label class="col-sm-3">Available Seats : </label>
                    <input type="number" class="form-control col-sm-9" name="available_seats" maxlength="15" min="1" size="15" value="{{ $seat->available_seats}}" required />
                  </div>
                    <br>
                     <div class="col-12 row">
                      <label class="col-sm-3">Allocated Seats : </label>
                    <input type="number" class="form-control col-sm-9" name="allocated_seats" maxlength="15" min="1" size="15" value="{{ $seat->allocated_seats}}" required />
                  </div>
                    <br>

              </div>
              
              <button type="submit" class="btn btn-primary">Update Seat Matrix</button>
          </form>
      </div>
    </div>
  </div>
</div>
@endsection