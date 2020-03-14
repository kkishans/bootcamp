<!-- edit.blade.php -->

@extends('auth.layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
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
      <form method="post" action="{{ route('course.update', $book->id) }}">
          <div class="form-group">
               {{ csrf_field() }}
              {{method_field('PATCH')}}

              <label for="name">Book Name:</label>
              <input type="text" class="form-control" name="book_name" value="{{$course->cname}}"/>
          </div>
          
          <button type="submit" class="btn btn-primary">Update Course</button>
      </form>
  </div>
</div>
@endsection