<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Session;

class CustomAuthController extends Controller
{
   public function login(){
    return view("auth.login");
   }
   public function registration(){
    return view("auth.registration");
   }
   public function registerUser(Request $request){
    // dd($request->all()); // Debugging line
    $request->validate([
        'name'=>'required',
        'email'=>'required|email|unique:users',
        'password'=>'required|min:5|max:12'
    ]);
    $user = new User();
    $user->name = $request->name;
    $user->email = $request->email;
    $user->password = Hash::make($request->password);
    $res = $user->save();
    if($res){
        return back()->with('success','You have registered successfully');
    }else{
        return back()->with('fail','Something');
}
}
public function loginUser(Request $request){
    // dd($request->all()); // Debugging line
    
    $request->validate([
        'email'=>'required',
        'password'=>'required'
    ]);
    $user =User::where('email','=',$request->email)->first();
    if($user){
        if (Hash::check($request->password,$user->password)){
            $request->Session()->put('logId',$user->id);
            return redirect('dashboard');
        }else{
            return back()->with('fail','Password not matches.');
        }
        

    }else{
        return back()->with('fail','This email is not registered.');
    }
}
// public function dashboard(){
//     $data = array();
//     if(Session::has('logiId')){
//         echo "hello";
//         print_r( Session::get('logId'));
//         $data = User::where('id','=', Session::get('logId'))->first();

//     }
//     return view('dashboard',compact('data'));
// }
public function dashboard()
{
    $data = array();
    if (Session::has('logId')) {
        
        $data = User::where('id', '=', Session::get('logId'))->first();
        
    } else {
        echo "Session logId not found.";
    }

    return view('dashboard', compact('data'));
}

}