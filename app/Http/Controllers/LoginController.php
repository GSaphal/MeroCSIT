<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
  public function display_login()
  {
  return view('login');
}

  public function check_login(request $request){

     $credentials=$request->only('email','password');
     if(Auth::attempt($credentials)){
       return redirect()->route('dashboard');
     }
     else{
       return redirect()->route('/');
     }

   }

 }
