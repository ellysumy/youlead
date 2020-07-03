<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Users;
use Auth;

class PanelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //     //
    //     $users = Users::all();
    //     return view('index', compact('users'));
    // }

    public function __construct()
    {
        // $this->middleware('auth');
        $this->middleware(['auth','verified']);
    }
    public function profile(){
        
        return view('profile', array('user' => Auth::user()));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function usercreate(){
        
        return view('layouts.createprofile', array('user' => Auth::user()));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate([
            'first_name',
            'last_name' ,
            'email' ,
            'job_title',
            'city',
            'country',
            'password',
            'gender',
            'proffessional',
            'youlead_alumin_status',
        
            'biography'
        ]);
        // Users::update($updateData);
        Users::where('id',$id)->update($request->except(['_method', '_token']));
        // Users::whereId($id)->update($updateData);
        
        return view('profile', array('user' => Auth::user()));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
