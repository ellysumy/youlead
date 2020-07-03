@extends('layouts.user')

@section('content')
<div class="container">
    <div class="row justify-content-center">
       
        <div>
          <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            <div class="card">
              
                

               <h2>{{ $user->first_name}}`s Profile </h2>
                              
                 <img src="public/uploads/avatars/{{$user->id}}/{{$user->avatar}}" style="width: 150px; float:left;  height: 150px;border-radius: 50%;margin-right: 25px;">
                 
                 <div class="row">
                  <div class="col-md-3" style="padding-top: 15px; padding-left: 10px;">
                  <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#avatar">
                        Change Avatar?
                   </button>
              </div>
               <div class="container col-md-7 " style="background-color: green; color: white;"><p> Welcome {{ $user->first_name}} this is your profile place. You can update or create your profile now.</p></div>
               </div>



<table class="table table-striped" >
    <thead>
        <tr>
          
          
          
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
           
           
            <td>{{$user->first_name}}</td>

            <td>{{$user->last_name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->job_title}}</td>
            <td>{{$user->city}}</td>
            <td>{{$user->country}}</td>
            <td><button>Edit</button></td>
            
        </tr>
           
        
        
       
        <hr/>
    </tbody>
  </table >
  <div>
          
          <h2> Biography</h2>
            <p>
              
              <td>{{$user->biography}}</td>
            </p>
        </div>
            
         
  <hr/>


               <!-- <form enctype="multipart/form-data" action="{{ route('update') }}" method="POST">
               <label> Change Avatar</label> 
               <input type="file" name="avatar">
               <input type="text" name="last_name">
               <input type="hidden" name="_token" value="{{csrf_token()}}">
               <input type="submit" value ="submit" class="pull-right btn btn-sm btn-primary" >
           </form> -->
           <!-- The Modal -->
  <div class="modal" id="avatar">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Update your profile picture</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <form enctype="multipart/form-data" action="{{ route('update') }}" method="POST">
               <label> Upload Avatar</label> 
               <input type="file" name="avatar">
              
               <input type="hidden" name="_token" value="{{csrf_token()}}">
               <input type="submit" value ="submit" class="pull-right btn btn-sm btn-primary" >
           </form>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
         <!--    -->
        </div>
        
      </div>
    </div>
  </div>
            </div>
        </div>
    </div>

</div>
@endsection
