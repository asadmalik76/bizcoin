<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rating;
use PDO;
class RatingController extends Controller
{
    function index(){
        $ratings=Rating::all();
        return view('admin.ratings.show',compact('ratings'));
    }
    function status(Request $request){
        $rating=Rating::where('id',$request->get('id'))->update([
            'status'=>"1"
        ]);

    }
    function destroy($id){
        $rating=Rating::find($id);
        $rating->delete();
        return redirect()->route('testimonials.index')->with('success','Testmonial has been deleted successfully');
    }
}
