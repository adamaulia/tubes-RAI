<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('home',['middleware'=>'auth',function(){
	
		echo 'welcome home '.Auth::user()->name.'.';
}]);

Route::get('admin',['middleware'=>'admin',function(){
	echo "admin page";
}]);

Route::get('user/{id}',function($id){
	if(Auth::guest()){
		return Redirect::to('auth/login');
	}else{
		$user=App\User::find($id);
		echo 'The user with ID of '.$id.'has email of : '.$user->email;	
	}
});

Route::controllers([
	'auth' => 'Auth\AuthController', 
	'password' =>'Auth\PasswordController', 
]);