<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use App\Returnrate;
use App\Fee;
use Carbon\Carbon;
class ReturnrateController extends Controller
{
    function index(){
        $returns=Returnrate::orderBy('id','DESC')->get();
        return view('admin.returns.show',compact('returns'));
    }
    function create(){
        return view('admin.returns.create');
    }
    function edit($id){
        $rate=Returnrate::findorFail($id);
        return view('admin.returns.edit',compact('rate'));
    }
    function update(Request $request,$id){
        $fee=Fee::where('id','1')->first();
        $price=$fee->price;
        $previous=Returnrate::max('id');
        $previous_price=Returnrate::findorFail($id);
        $to_add=$previous_price->price/100*$request->rate;
        $price=$previous_price->price+$to_add;
        $rate->rate=$request->rate;
        $rate->price=$price;
        $rate->save();
        return redirect()->route('returnrate.index')->with('success','Return rate has been updated');
    }
    function store(Request $request){
        $fee=Fee::where('id','1')->first();
        $price=$fee->price;
        $previous=Returnrate::max('id');
        if($previous!=NULL){

            $previous_price=Returnrate::findorFail($previous);
            $to_add=$previous_price->price/100*$request->rate;
            $price=$previous_price->price+$to_add;
        }
        else{
            $price=100+$request->rate;
        }
        $returns=Returnrate::create([
            'rate'=>$request->rate,
            'price'=>$price,
            'date'=>carbon::now()
        ]);
        return redirect()->route('returnrate.index')->with('success','Return rate has been added sucessfully');
    }
    function destroy($id){
        $rate=Returnrate::findorFail($id);
        $rate->delete();
        return redirect()->route('returnrate.index')->with('Return rate has been deleted');
    }
}
