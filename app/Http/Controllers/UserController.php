<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use App\Fee;
use App\Rating;
use App\Returnrate;
use App\Withdraw;
use App\Transaction;
use Hash;
use App\Rules\MatchOldPassword;
use Auth;
class UserController extends Controller
{
    function index(){
        $users=User::all();
        return view('admin.users.show',compact('users'));
    }
    function update(Request $request,$id){
        $user=User::where('id',$id)->update([
            'full_name'=>$request->full_name,
            'username'=>$request->username,
            'email'=>$request->email,
            'address'=>$request->address,
            'country'=>$request->country,
            'state'=>$request->state,
            'city'=>$request->city,
            'balance'=>$request->balance,
            'phone'=>$request->phone
        ]);
        if($user){
            return redirect()->route('users.index')->with('success','User has been updated');
        }
    }
    function create(){
        return view('');
    }
    function status(Request $request){
        $user=User::where('id',$request->get('id'))->update(['status'=>$request->get('status')]);
        if($user){
            return "true";
        }
    }
    function dashboard(){
        $user=Auth::user()->id;
        $user=User::find($user);
        $price=Fee::where('id','1')->first();
        $price=$price->price;
        $invst=$price*auth::user()->balance;
        $return_rate=Returnrate::max('id');
        $return_rate=Returnrate::findorFail($return_rate);
        $rate=$return_rate;
        $price_now=$return_rate->price*auth::user()->balance;
        // current profit
        $profit=$price_now-$invst;

    $total_investment=Transaction::where('id',auth::user()->id)->where('status','1')->get();
    // total investment
    $total_invest=0;
        foreach($total_investment as $invst){
            $total_invest=$invst->amount+$total_invest;
        }
        $withdraws=Withdraw::where('user_id',auth::user()->id)->where('status','1')->get();
        // withdrawn
        $total_withdraw=0;
        foreach($withdraws as $withdraw){
            $total_withdraw=$withdraw->amount+$total_withdraw;
        } 
        return view('frontend.dashboard',compact('total_invest','profit','total_withdraw','rate'));
    }
    function edit($id){
        $user=User::findorFail($id);
        return view('admin.users.edit',compact('user'));
    }
    function updateprofile(Request $request){
        $user=User::findOrFail(auth::user()->id);
        $user->full_name=$request->full_name;
        $user->username=$request->username;
        $user->email=$request->email;
        $user->phone=$request->phone;
        $user->address=$request->address;
        $user->country=$request->country;
        $user->city=$request->city;
        $user->state=$request->state;
        $user->save();
        return redirect()->route('profile')->with('success','Profile has been updated successfully');
        
    }
    function profile(){
        $user=User::findorFail(auth::user()->id);
        return view('frontend.profile',compact('user'));
    }
    function balance(){
        $users=User::all();
        return view('admin.usersbalance.show',compact('users'));
    }
    function balanceedit($id){
        $user=User::findorFail($id);
        return view('admin.usersbalance.edit',compact('user'));
    }
    function balanceupdate(Request $request,$id){
        $user=User::findorFail($id);
        $bal=$user->balance;
        $user->balance=$request->balance;
        $t_bal=$user->balance;
        $balance=$t_bal-$bal;
        $user->save();
        $rate=Returnrate::max('id');
        $rate=Returnrate::findorFail($rate);
        $rate=$rate->price;
        $price=$balance*$rate;
        $order_id=mt_rand(100000000,9999999999);
        $transaction = Transaction::create([
            'user_id'=>$user->id,
            'rate'=>$rate,
            'coins'=>$balance,
            'amount'=>$price,
            'order_id'=>$order_id,
            'status'=>"1"
        ]);
        return redirect()->route('usersbalance')->with('success','Balance has been updated successfully');
    }
    function changepass(Request $request){
       $this->validate($request,[
            'current_password' => ['required', new MatchOldPassword],
            'new_password' => ['required'],
            'new_confirm_password' => ['same:new_password'],
        ]);

            $hashedPassword = Auth::user()->password;
            if (\Hash::check($request->current_password, $hashedPassword)) {
                if (!\Hash::check($request->new_password, $hashedPassword)) {
                    $users =User::find(Auth::user()->id);
                    $users->password = bcrypt($request->new_password);
                    User::where('id', Auth::user()->id)->update(array( 'password' =>  $users->password));
                    session()->flash('success', 'password updated successfully');
                    return redirect()->back();
                } else {
                     session()->flash('error', 'new password can not be the old password!');
                     return redirect()->back();
                }
            } else {
                 session()->flash('error', 'old password doesnt matched ');
                 return redirect()->back();
            }

    }
    function feedback(){
        return view('frontend.feedback');
    }
    function storefeedback(Request $request){
        $rating=Rating::create([
            'user_id'=>auth::user()->id,
            'rating'=>$request->rating,
            'remarks'=>$request->remarks
        ]);
        return redirect()->route('feedback')->with('success','Thanks for your feedback');
    }
}
