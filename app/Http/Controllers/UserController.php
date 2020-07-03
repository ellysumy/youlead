<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Image;
use App\Users;
use File;

class UserController extends Controller
{


    public function __construct()
    {
        // $this->middleware('auth');
        $this->middleware(['auth','verified']);
    }
    //

    public function index()
    {
        return view('home');
    }

    public function profile(){
    	
    	return view('profile', array('user' => Auth::user()));
    }
    public function usercreate(){
        
        return view('layouts.createprofile', array('user' => Auth::user()));
    }
    

     public function update_avatar(Request $request){
     
     	
      if($request->hasFile('avatar')){
     		$avatar = $request->file('avatar');
     		$filename = time(). '.' . $avatar->getClientOriginalExtension();
         $user = Auth::user();
         $path = 'public/uploads/avatars/'.$user->id;

        File::makeDirectory('public/uploads/avatars/'.$user->id, $mode = 0755, true, true);

     		Image::make($avatar)->resize(300, 300)->save('public/uploads/avatars/'.$user->id.'/'. $filename);
     		
     		$user->avatar = $filename;
     		$user->save();
         
      //    }

         // if ($request->hasFile('avatar')) {
         //    $currentUser = Auth::user();
         //    $avatar = $request->file('avatar');

            // $filename = 'avatar.'.$avatar->getClientOriginalExtension();
            // $filename = time(). '.' . $avatar->getClientOriginalExtension();


            // $save_path = storage_path().'/users/id/'.$currentUser->id.'/uploads/images/avatar';

            // $path = $save_path.$filename;
            // $public_path = '/images/profile/'.$currentUser->id.'/avatar/'.$filename;

            // Make the user a folder and set permissions
            // \File::makeDirectory($save_path, $mode = 0755, true, true);

            // Save the file to the server
            // Image::make($avatar)->resize(300, 300)->save($save_path.$filename);

            // Save the public image path
            // $currentUser->avatar = $public_path;
            // $currentUser->save();

        //     return response()->json(['path' => $path], 200);
        // } else {
        //     return response()->json(false, 200);
        }


     	return view('profile', array('user' => Auth::user()));
    	
    	
    }

    public function create(Request $request, $id){

        //put some codes
        $request->validate([
            'first_name'=>'required',
            'last_name'=>'required',
            'email'=>'required'
        ]);
       

        $users = new Users([
            'first_name' => $request->get('first_name'),
            'last_name' => $request->get('last_name'),
            'email' => $request->get('email'),
            'job_title' => $request->get('job_title'),
            'city' => $request->get('city'),
            'country' => $request->get('country'),
            'password' => $request->get('password'),
            'gender' => $request->get('gender'),
            'community' => $request->get('community'),
            'proffessional' => $request->get('proffessional'),
            'youlead_alumin_status' => $request->get('youlead_alumin_status'),
        
            'biography' => $request->get('biography')
        ]);

        Users::whereId($id)->update($updateData);

        return view('profile', array('user' => Auth::user()));

    }

      public function update(){

        //put some codes
        
    }

      public function edit(){

        //put some codes
        
    }

      public function delete(){

        //put some codes

        
    }
      public function select(){

        //put some codes
        
    }
      public function approve(){

        //put some codes
        
    }
}
