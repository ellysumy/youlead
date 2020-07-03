@extends('layouts.adminview')

@section('content')
<div class="row">
<div class="col-sm-12">
    <h1 class="display-3">Details of {{$user->first_name}} {{$user->last_name}}</h1>    
  <table class="table table-striped">
   <tr><img src="/../../public/uploads/avatars/{{$user->id}}/{{$user->avatar}}" style="width: 150px; float:left;  height: 150px;border-radius: 50%;margin-right: 25px;"></tr>
        
        <th> First name: <td>{{$user->first_name}} </td></th>
      
        <tr><th>Second Name: <td>{{$user->last_name}}</td></th></tr>
        <tr><th>Email Address: <td>{{$user->email}}</td></th></tr>
        <tr><th>Job Tittle: <td>{{$user->job_title}}</td></th></tr>
        <tr><th>City: <td>{{$user->city}}</td></th></tr>
        <tr><th>Country: <td>{{$user->country}}</td></th></tr>
        <tr><th>Proffessional: <td></td> </th></tr>
        <tr><th>Gender: <td></td></th></tr>
        <tr> <th>Status: </th></tr>
        <tr> <th>Biograph: </th><td>{{$user->biography}}</td></tr>

        <tr><th><a href="{{ route('admin.edit',$user->id)}}" class="btn btn-primary">Approve</a>
          </th>
          <!-- <td>
                <a href="{{ route('admin.edit',$user->id)}}" class="btn btn-primary">View</a>
            </td> -->
            <th>
                <form action="{{ route('admin.destroy', $user->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </th>
        </tr>
        
   
  </table>
<div>
</div>
@endsection