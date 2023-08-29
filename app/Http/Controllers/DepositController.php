<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Deposit;


class DepositController extends Controller
{
    public function deposit()
    {
        return view('user.deposit');
    }

    public function upload(Request $request){
        $deposit = new deposit;

        $deposit -> amount = $request -> amount;

        $deposit -> currency = $request ->currency;

        $deposit -> bank = $request -> bank;

        $deposit -> account_hash = $request ->account_hash;

        $deposit -> status = 'In Progress';

        if(Auth::id()){
         $deposit -> account_username = Auth::user() -> email;
        }

        $deposit -> save();

        return redirect()->back() -> with ('message', 'Deposit Succesfuly Uploaded!');
    }
}
