<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    // public function redirect(){
    //     if(Auth::id()){
    //         if(Auth::user()->usertype=='0'){
    //             $doctor = doctor::all();
    //             return view('user.home',compact('doctor'));
    //         }
    //         else if(Auth::user()->usertype=='2'){
    //             return view('admin.home');
    //         }
    //         else if(Auth::user()->usertype=='1'){
    //             return view('doctor.home');
    //         }
    //         else{
    //             return view('auth.login');
    //         } 
    //     }

    //     else{
    //         return redirect()->back(); 
    //     }
    // }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('user.index');
    }
}
