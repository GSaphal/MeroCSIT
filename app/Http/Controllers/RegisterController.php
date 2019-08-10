<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class RegisterController extends Controller
{
  public function display_register(){
      return view('register');
  }
  public function register_store(Request $request){
$this->validate($request,[
  'email'=>'required|email|max:255|min:4',
  'password1'=>'required|min:8',
  'password2'=>'required|min:8',
  'college_name'=>'required',
  'name'=>'required|max:50',
  'address'=>'required',
]);
$user_register=new User;
$user_register->name=$request->input('name');
$user_register->address=$request->input('address');
$user_register->college_name=$request->input('college_name');
$user_register->gender=$request->input('gender');
$user_register->email=$request->input('email');
$user_register->password=$request->input('password1');
$user_register->save();
return redirect()->route('display_login');
}
}
