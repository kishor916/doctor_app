<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User_ap;
use Illuminate\validation\Rule;

class UserController extends Controller
{
   public function register( Request $request){
    $incomingFields = $request->validate([
        'first_name'=> ['required','min:3','max:13'],
        'last_name'=> 'required',
        'email'=> ['required','email',Rule::unique('users','email')],
        'password'=> ['required','min:7'],
        'gender'=> 'required',
        'phone'=> 'required',
        'address'=> 'required'
    ]);
    $incomingFields['password'] = password_hash($incomingFields['password'], PASSWORD_BCRYPT);

    User_ap::create($incomingFields);
    return 'file has been registered';
   }

   public function showCorrectHomepage(){
   if ( auth()->check()){
    return view('profile');
   }else{
    return view('welcome');
   }
    
   }

   public function login(Request $request){
    $incomingFields = $request->validate([
        'user_email'=>'required',
        'user_password'=>'required'
    ]);

    if(auth()->attempt(['email'=> $incomingFields['user_email'], 'password'=>$incomingFields['user_password']])){
        $request->session()->regenerate();
        return view('profile')->with('success','you have sucessfully loged in');
    }else{
        return redirect('/')->with('success','login failed, no such user in the database');
    }

   }

   public function logout(){
     auth()->logout();
     return redirect('/')->with('success','you have sucessfully loged out ');
   }


   
}
