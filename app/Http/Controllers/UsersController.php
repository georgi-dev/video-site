<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\User;
use App\Http\Requests;

use App\Http\Controllers\ViewsController as ViewC;

class UsersController extends Controller
{   
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
      	$this->validate($request,[
      		'email' => 'required|unique:users',
      		'username' => 'required|min:4',
      		'password' => 'required|min:6'
      		]);
      	$email = $request['email'];
      	$username = $request['username'];
      	$password = bcrypt($request['password']);

      	 $user = new User();

      	 $user->email = $email;
      	 $user->username = $username;
      	 $user->password = $password;

      	 $user->save();

      	 return redirect()->route('sign-in');
    }

    public function login(Request $request)
    {
        if (Auth::attempt(['email' => $request['email'],'password' => $request['password']])) {
            
            return redirect()->route('dashboard');

        }else {return 'FALSE';}
    }

    public function logout()
    {
        Auth::logout();

         return redirect()->route('homepage');
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
