@extends('layouts.adminview')

@section('content')
<div class="row">
<div class="col-sm-12">
    <h1 class="display-3">All Registered Portal User</h1>    
  <table class="table table-striped">
    <thead>
        <tr>
          
          <td>Name</td>
          <td>Email</td>
          <td>Job Title</td>
          <td>City</td>
          <td>Country</td>
          <td colspan = 2>Actions</td>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
        <tr>
            
            <td>{{$user->first_name}} {{$user->last_name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->job_title}}</td>
            <td>{{$user->city}}</td>
            <td>{{$user->country}}</td>
            <td>
                <a href="{{ route('admin.edit',$user->id)}}" class="btn btn-primary">Edit</a>
            </td>
            <td>
                <a href="{{ route('admin.edit',$user->id)}}" class="btn btn-primary">View</a>
            </td>
            <td>
                <form action="{{ route('admin.destroy', $user->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
</div>

</div>

@endsection