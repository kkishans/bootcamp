<!-- create.blade.php -->

@extends('auth.layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Add Book
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
      <form method="post" action="{{ route('create') }}">
          <div class="form-group">
              {{ csrf_field() }}
              <label for="name">Course Name:</label>
              <input type="text" class="form-control" name="cname"/>
          </div>
          
          <button type="submit" class="btn btn-primary">Create Course</button>
      </form>
  </div>
</div>
@endsection