<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Transactions;

use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{
    public function transaction()
    {
        return view('user.transaction');
    }

    public function uploadTransactions(Request $request){
        $transaction = new transactions;

        $transaction ->sender_wallet_id = $request ->sender_wallet_id;
        
        $transaction -> amount= $request -> amount;

        $transaction -> amount = $request ->amount;

        $transaction -> curreny = $request ->curreny;

        $transaction -> status = 'In Progress';

        $transaction -> bank = $request -> bank;

        $transaction -> reciver_id = $request -> reciver_id;

        if(Auth::id()){
         $transaction -> account_username = Auth::user() -> email;
        }

        $transaction -> save();

        return redirect()->back() -> with ('message', 'Transactions Succesfuly Uploaded!');
    }

    public function showTransaction(){
        if(Auth::id()){

            $account_username=Auth::user()->email;

            $transactions = transactions :: where('account_username',$account_username)->get();

            return view('user.transactionView' , compact('transactions'));
        }

        else {
            return redirect()-> back();
        }
    }

    public function cancel_transactions($id){
        $transactions = transactions::find($id);

        $transactions -> delete();

        return redirect()->back();
    }

}
