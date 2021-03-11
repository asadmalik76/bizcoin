<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Transaction;
use App\Fee;
use App\Returnrate;
use Auth;
class TransactionController extends Controller
{

    function index(){
        $transactions=Transaction::all();
        return view('admin.transactions.show',compact('transactions'));
    }
    function create(Request $request){
        $rate=Returnrate::max('id');
        $rate=Returnrate::findorFail($rate);
        $rate=$rate->price;
        $order_id=mt_rand(100000000,9999999999);
        $transaction = Transaction::create([
            'user_id'=>auth::user()->id,
            'rate'=>$rate,
            'coins'=>$request->get('coins'),
            'amount'=>$request->get('amount'),
            'order_id'=>$order_id,
            'status'=>"0"
        ]);
        if($transaction){
            return view('frontend.success');
        }
    }
    function approve($id){
        $t=Transaction::where('id',$id)->update(['status'=>"1"]);
        return redirect()->route('transactions.index')->with('success','Transaction has been approved');
    }
    


}
