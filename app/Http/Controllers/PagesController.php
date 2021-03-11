<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;
class PagesController extends Controller
{
    function privacyshow(){
        $content=Page::where('page_name','privacy')->first();
        return view('admin.pages.privacy',compact('content'));
    }
    function privacyupdate(Request $request){
        $content=Page::where('page_name','privacy')->update([
            'content'=>$request->content
        ]);
        return redirect()->back()->with('success','Content has been updated successfully');
    }
    function termsshow(){

        $content=Page::where('page_name','terms')->first();
        return view('admin.pages.terms',compact('content'));
    }
    function termsupdate(Request $request){
        
        $content=Page::where('page_name','terms')->update([
            'content'=>$request->content
        ]);
        return redirect()->back()->with('success','Content has been updated successfully');
    }
    
}
