@extends('layouts.app')

@section('content')
<br>
<div class="container"  >
    <div align="center" >
          <div class="card col-md-12 col-sm-12 col-xl-11 col-lg-11 justify-content-center text-center">
            <br>
    <div class="row">   
        <br>
        <div class="col-11"> <h1>All Registered Students</h1></div>
    </div>  
            
<div class="card-body">
    <table class="table table-striped ">
        @if(sizeof($students) > 0)
            <tr>
                <th>Id</th>
                <th>Student Name</th>
                <th>Course</th>
                <th>Address</th>
                <th>Phone</th>
                <th>Email-Address</th>
                <th>Batch Id</th>
                <th>Allow W'Group</th>
            </tr>
            @foreach($students as $s)

            <tr>
                <td>{{$s->sid}}</td>
                <td>{{ $s->fname." ".$s->lname}}</td>
                <td>{{ $s->course ." ".$s->sem ." Sem "}}</td>
                <td>{{ $s->address}}</td>
                <td>{{ $s->phone}}</td>
                <td>{{ $s->email}}</td>
                <td>{{ $s->bid}}</td>
                @if($s->join == 0)
                <td>No</td>
                @else
                <td>Yes</td>
                @endif
                
            </tr>

            @endforeach
        @else
            <tr class="lead text-center col-3 " style="background-color: white;">
                
                <td>No Students Have Registered yet!</td>
                
            </tr>
        @endif
    </table>

    </div>
</div>
</div>
</div>
@endsection