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
        Edit Batch
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
          <form method="post" action="{{ route('batch.update', $batch->bid) }}">
              <div class="form-group">
                   {{ csrf_field() }}
                  {{method_field('PATCH')}}

                   <div class="col-12 row">
                      <label class="col-sm-3">Total Seats : </label>
                    <input type="number" class="form-control col-sm-9" name="total_seat" maxlength="15" min="1" size="15" value="{{ $batch->remaining_seats}}" required />
                  </div>
                    <br>
                    <div class="col-12 row">
                      <label class="col-sm-3">Time</label>
                       <input type="time" class="form-control col-sm-9" name="time" value="{{ $batch->batch_time }}" required />

                    </div><br>
              
                   <div class="col-12 row">
                      <label class="col-sm-3">Course ID : </label>
                       <input type="number" class="form-control col-sm-9" name="c_id" value="{{ $batch->courseid }}" required />

                    </div><br>
              </div>
              
              <button type="submit" class="btn btn-primary">Update Batch</button>
          </form>
      </div>
    </div>
  </div>
</div>
@endsection