@extends('layouts.user') 
@section('content')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Update a Profile Data</h1>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <br /> 
        @endif
        <form enctype="multipart/form-data" method="post" action="{{ route('panel.update', $user->id) }}">
             @method('PATCH') 
            @csrf
            <div class="form-group">

                <label for="first_name">First Name:</label>
                <input type="text" class="form-control" name="first_name" value={{ $user->first_name }} />
            </div>

            <div class="form-group">
                <label for="last_name">Last Name:</label>
                <input type="text" class="form-control" name="last_name" value={{ $user->last_name }} />
            </div>
            <div class="form-group">
                <label for="email">Gender: </label>
            <div class="form-check-inline">
  <label class="form-check">
    <input type="radio" class="form-check-input" name="gender" value="Male">Male
  </label>
</div>
<div class="form-check-inline">
  <label class="form-check">
    <input type="radio" class="form-check-input" name="gender" value="Female">Female 
  </label>
  <div class="form-check-inline">
  <label class="form-check">
    <input type="radio" class="form-check-input" name="gender" value="Other">Other
  </label>
</div>
</div>
</div>


            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" class="form-control" name="email" value={{ $user->email }} />
            </div>
           
           
            <div class="form-group">
                <label for="city">City:</label>
                <input type="text" class="form-control" name="city" value={{ $user->city }} />
            </div>
            <div class="form-group-inline">
                <label for="country">Country:</label>
                <input type="text" class="form-control" name="country" value={{ $user->country }} />
            </div>
            <div class="form-group">
      <label for="sel1">Select your (EAC) country</label>
      <select class="form-control" id="sel2" name="country">
        <option>Tanzania</option>
        <option>Kenya</option>
        <option>Uganda</option>
        <option>South Sudan</option>
        <option>Rwanda</option>
        <option>Burund</option>
        <option>Other</option>
      </select>
      
    </div>

            <div class="form-group">
                <label for="job_title">Job Title:</label>
                <input type="textarea" class="form-control" name="job_title" value={{ $user->job_title }} />

            </div>
            <div class="form-group">
                <label for="email">Fist time at YouLead</label>
            <div class="form-check-inline">
  <label class="form-check">
    <input type="radio" class="form-check-input" name="youlead_alumin_status" value="No">No
  </label>
</div>
<div class="form-check-inline">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" name="youlead_alumin_status" value="Yes">Yes
  </label>
  <div class="form-check-inline">
  
</div>
</div>
</div>
 <div class="form-group">
      <label for="sel1"> Select Joining Community</label>
      <select class="form-control" id="sel1" name="community">
        <option>Delegates</option>
        <option>Sponsor</option>
        <option>Board of Patron</option>
        <option>Secretariates</option>
        <option>Volunteers</option>
        <option>Action_Network</option>
        <option>YouLead Consortium</option>
         <option>YouLead Speakers</option>
        
      </select>
      
    </div>

             <div class="form-group">
              <label for="biography">Biograph:</label>
              <textarea class="form-control" rows="10" cols="90" maxlength="250" name="biography"></textarea>
              
            </div>
            <div class="form-group">

            <label> Upload Avatar</label> 
               <input type="file" name="avatar">
           </div>


     <button type="submit" class="btn btn-primary">Update</button>
          </div> 
           
        </form>
    </div>
</div>
@endsection