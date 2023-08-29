<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Models\Withdraw;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;


class WithdrawController extends Controller
{
    public function withdraw()
    {
        return view('user.withdraw');
    }


    public function uploadWithdraw(Request $request){
        $withdraws = new withdraw;

        $withdraws -> wallet_address = $request -> wallet_address;

        $withdraws -> amount = $request ->amount;

        $withdraws -> account_hash = $request -> account_hash;

        $withdraws -> status = 'In Progress';

        $withdraws -> cryptocurrency = $request -> cryptocurrency;

        if(Auth::id()){
         $withdraws -> account_username = Auth::user() -> email;
        }

        $withdraws -> save();

        return redirect()->back() -> with ('message', 'Withdraw Succesfuly Uploaded!');
    }

    public function withdrawRequest(){
        if(Auth::id()){

            $account_username=Auth::user()->email;

            $withdraws = withdraw :: where('account_username',$account_username)->get();

            return view('user.withdrawRequest' , compact('withdraws'));
        }

        else {
            return redirect()-> back();
        }
    }
    
    public function cancel_withdraw($id){
        $withdraws = withdraw::find($id);

        $withdraws -> delete();

        return redirect()->back();
    }
}
