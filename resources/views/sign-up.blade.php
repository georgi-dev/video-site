@extends('layouts.master')
@section('title')
@stop
@section('content')
<div style="background:#444;">
    <div class="row">
    	<div class="col-md-3" style="margin-left: 4%;">
    		<h3>Sign Up</h3>
    		<form  method="post" action="{{route('sign_up')}}" style="line-height: 239%;">
    			<div class="for-group">
	    			<label for="email">Your E-mail</label>
	    			<input class="form-control" type="text" name="email" id="email">
    			</div>
                <div class="for-group">
                    <label for="username">Your Username</label>
                    <input class="form-control" type="text" name="username" id="username">
                </div>

    			<div class="for-group">
	    			<label for="password">Your Password</label>
	    			<input class="form-control" type="password" name="password" id="password">
    			</div></br>
    			<button type="submit" name="submit" class="btn btn-danger" data-ajax="show">Sign Up </button> or <a class="btn btn-default"href="login"> Sign in</a>
    			<input type="hidden" name="_token" value="{{ csrf_token()}}">
    		</form>
            
             @foreach($errors->all() as $error)
            <h5 class="alert alert-danger">* {{$error}}</h5>
            @endforeach

    	</div>	
    	<div class="col-md-6 col-md-offset-2" >
    		<img src="/images/dracula.jpg" style="width:100%; height:auto;padding:30px;">

    	</div>
    </div>
</div>	
@stop