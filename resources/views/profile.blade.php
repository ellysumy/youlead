@extends('layouts.user')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div>
            <div class="card">
              
                 <img src="public/uploads/avatars/{{$user->avatar}}" style="width: 150px; float:left;  height: 150px;border-radius: 50%;margin-right: 25px;">

               <h2>{{ $user->name}}`s Profile </h2>



<table class="table table-striped" >
    <thead>
        <tr>
          <td>ID</td>
          
          
           <td>First Name</td>
           <td>Last Name</td>
          <td>Email</td>
          <td>Job Title</td>
          <td>City</td>
          <td>Country</td>
          
          <td colspan = 2>Actions</td>
        </tr>
    </thead>
    <tbody>
       
        <tr style="border-color: red; border: 2px;">
            <td>{{$user->id}}</td>
           
            <td>{{$user->name}}</td>
            
        </tr>
           
        
        
       
        <hr/>
    </tbody>
  </table >
  <div>
          
          <h2> Biography</h2>
            <p>
              
              Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
            </p>
        </div>
            
         
  <hr/>


               <form enctype="multipart/form-data" action="{{ route('update') }}" method="POST">
               <label> Change Avatar</label> 
               <input type="file" name="avatar">
               <input type="hidden" name="_token" value="{{csrf_token()}}">
               <input type="submit" value ="submit" class="pull-right btn btn-sm btn-primary" >
           </form>
            </div>
        </div>
    </div>
</div>
@endsection
