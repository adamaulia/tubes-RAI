<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;

use Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use App\Participant;

class ParticipantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('register');
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
    public function store(Request $request)
    {
        //
        $user = new  user;
        $participant = new participant;
        $Temprole=Request::get('role');

        if ( strcmp ( $Temprole, "Membership") == 0  ){
            $role=1;
        }else 
        if ( strcmp ( $Temprole, "Non Membership") == 0  ){
            $role=0;
        }

<<<<<<< HEAD

=======
        $password=Request::get('nim');
>>>>>>> f783e815adcf4440badb3e2091dd6eb800e45d7c

        //echo "password ".$password;
        //buat user
        $user->username=Request::get('nim');
        $user->role=$role;
<<<<<<< HEAD
        $user->password=Request::get('nim');
=======
        $user->password=bcrypt($password);
>>>>>>> f783e815adcf4440badb3e2091dd6eb800e45d7c
        $user->save();
        //echo $user->password;
        //buat participant
        $participant->nim=Request::get('nim');
        $participant->name=Request::get('username');
        $participant->class=Request::get('class');
        $participant->major=Request::get('major');
        $participant->faculty=Request::get('fakultas');
        $participant->level=Request::get('level');
        $participant->membership_type=Request::get('role');
        $participant->save();

<<<<<<< HEAD
=======
        //return  $user;
>>>>>>> f783e815adcf4440badb3e2091dd6eb800e45d7c
        return redirect('home')->with('message','berhasil register');

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
