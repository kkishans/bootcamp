<!-- index.blade.php -->

@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="uper">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Book Name</td>
          <td>ISBN Number</td>
          <td>Book Price</td>
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($books as $book)
        <tr>
            <td>{{$book->id}}</td>
            <td>{{$book->book_name}}</td>
            <td>{{$book->isbn_no}}</td>
            <td>{{$book->book_price}}</td>
            <td><a href="{{ route('course.edit',$book->id)}}" class="btn btn-primary">Edit</a></td>
            <td>
                <form action="{{ route('course.destroy', $book->id)}}" method="post">
                   {{ csrf_field() }}
                  {{method_field('DELETE')}}
                    
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection