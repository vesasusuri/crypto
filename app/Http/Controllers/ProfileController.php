<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Models\User;

use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function profile()
    {
        return view('user.profile');
    }

    public function showProfile(){
        if(Auth::id()){

            $account_username=Auth::user()->email;

            $profiles = register :: where('account_username',$account_username)->get();

            return view('user.profile' , compact('profiles'));
        }

        else {
            return redirect()-> back();
        }
    }
}
