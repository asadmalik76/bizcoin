<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fee;
use App\Transaction;
use App\Withdraw;
use App\User;

class AdminController extends Controller
{
    function index(){

    }
    function edit($id){

    }
    function create(Request $request){

    }
    function update(Request $request,$id){

    }
    function dashboard(){
        $users=User::count();
        $coins=User::all();
        $transations=Transaction::where('status','1')->get();
        $withdraws=Withdraw::where('status','1')->get();
        $total_withdraw=0;
        $total_transactions=0;
        $total_coins=0;
        foreach($withdraws as $withdraw){
            $total_withdraw=$withdraw->amount+$total_withdraw;
        }
        foreach($transations as $tran){
            $total_transactions=$tran->amount+$total_transactions;
        }
        foreach($coins as $coin){
            $total_coins=$coin->balance+$total_coins;
        }
        return view('admin.dashboard',compact('total_coins','users','total_withdraw','total_transactions'));
    }
    function fee(){
        $fee=Fee::where('id','1')->first();
        return view('admin.pricing.show',compact('fee'));
        // dd($fee->price);
    }
    function editfee(){
        $fee=Fee::where('id','1')->first();
        return view('admin.pricing.edit',compact('fee'));
    }
    function updatefee(Request $request){
        $fee=Fee::where('id','1')->first();
        $fee->price=$request->price;
        $fee->save();
        return redirect('/admin/pricing')->with('success','Price has been updated');
    }

}
