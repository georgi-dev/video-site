<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;

class ViewsController extends Controller

{	public function toHomePage()
    {
    	return view('welcome');
    }

    public function toRegisterPage()
    {
    	return view('sign-up');
    }

    public function toLoginPage()
    {
    	return view('sign-in');
    }

    public function toDashboard()
    {	
    	$user = Auth::user();
    	//print_r($user);
    	return view('dashboard',compact('user'));
    }
}
