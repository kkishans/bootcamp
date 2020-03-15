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
        Edit Course
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
          <form method="post" action="{{ route('course.update', $course->cid) }}">
              <div class="form-group">
                   {{ csrf_field() }}
                  {{method_field('PATCH')}}

                  <label for="name">Course Name:</label>
                  <input type="text" class="form-control" name="cname" value="{{$course->cname}}"/>
              </div>
              
              <button type="submit" class="btn btn-primary">Update Course</button>
          </form>
      </div>
    </div>
  </div>
</div>
@endsection