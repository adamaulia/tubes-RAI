<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function home(){
        return view('home');        // view page '/resources/views/home.php'
    }    

    public function register(){
        return view('register');        // view page '/resources/views/register.php'
    }

    public function news(){
        return view('news');        // view page '/resources/views/news.php'
    }

    public function login(){
        return view('login');        // view page '/resources/views/login.php'
    }    

    public function tutor(){
        return view('tutor');        // view page '/resources/views/register.php'
    }   

    public function staff(){
        return view('staff');        // view page '/resources/views/register.php'
    }   

    public function report(){
        return view('report');        // view page '/resources/views/register.php'
<<<<<<< HEAD
    } 

    public function logout(){
        return view('logout');
    }

    public function profil(){
        return view('profil');
    }

=======
    }   

    public function member(){
        return view('member');        // view page '/resources/views/register.php'
    } 

    public function pay(){
        return view('pay');        // view page '/resources/views/register.php'
    } 

    public function about(){
        return view('about');        // view page '/resources/views/register.php'
    }   

    public function contact(){
        return view('contact');        // view page '/resources/views/register.php'
    }   
>>>>>>> 20d06b61beacd06fdaff243f103235b2c0c98e36
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
