@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
       
        <div>
          <div class="top-right links">
                    @auth
                        <!-- <a href="{{ url('/home') }}">Home</a> -->
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            <!-- <div class="card">
               <h2>Admin Dashboard </h2>
   
           <hr/> -->
  
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
