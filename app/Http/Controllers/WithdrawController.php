<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use App\Withdraw;
use App\Returnrate;
class WithdrawController extends Controller
{

    function index(){
        $withdraws=Withdraw::all();
        return view('admin.withdraws.show',compact('withdraws'));
    }
    function approve($id){
        $withdraw=Withdraw::where('id',$id)->update([
            'status'=>"1"
        ]);
        $withdraw=Withdraw::findorFail($id);
        $user=User::findorFail($withdraw->user_id);
        $user->balance=$user->balance-$withdraw->amount;
        $user->save();
        return redirect()->route('withdraws.index')->with('success','Withdraw has been approve successfully')        ;
    }
    function destroy($id){

    }
    function withdraw(Request $request)
    {
        if($request->coins>auth::user()->balance){
            
        return redirect()->back()->with('warning','Insufficient Credit');
        }
    $rate=Returnrate::max('id');
    $rate=Returnrate::findorFail($rate);
    $rate=$rate->rate;
    $amount=$request->coins*$rate;
        $withdraw = Withdraw::create([
            'user_id'=>auth::user()->id,
            'amount'=>$amount,
            'coins'=>$request->coins,
            'rate'=>$rate,
            'status'=>"0"
        ]);
        return redirect()->back()->with('success','Withdraw request has been received');
    }
    function withdrawform(){
        return view('frontend.withdraw');
    }
}
