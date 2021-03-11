<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
class ContactController extends Controller
{
    function index(){
        $msgs=Contact::all();
        return view('admin.messages.show',compact('msgs'));
    }
    function destroy($id){
        $contact=Contact::findorFail($id);
        $contact->delete();
        return redirect()->route('contacts.index')->with('success','Message has been deleted successfully');
    }
    function store(Request $request){
        $contact=Contact::create($request->all());
        return redirect()->route('contactus')->with('success','Your message has been received successfully');
    }
}
