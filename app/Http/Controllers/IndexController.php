<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fee;
use App\Page;
use App\Returnrate;
use App\Rating;
class IndexController extends Controller
{
    function index(){
        $price=Fee::where('id','1')->first();
        $rates=Returnrate::orderBy('id','DESC')->take(5)->get();
        $ratings=Rating::where('status','1')->get();
        return view('frontend.welcome',compact('price','rates','ratings'));
    }
    function checkout(Request $request){
        $coins=$request->coins;
        $amount=$request->amount;
        return view('frontend.checkout', compact('coins','amount'));
    }
    
    function privacyshow(){
        $content=Page::where('page_name','privacy')->first();
        return view('frontend.privacy',compact('content'));
    }
    function termsshow(){

        $content=Page::where('page_name','terms')->first();
        return view('frontend.terms',compact('content'));
    }
}
