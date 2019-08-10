<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use App\Course;
use App\User;
use App\Result;
use App\old_question;
use App\college;
use App\Event;

use App\News;



class DashController extends Controller
{
  public function dashboard(){
    if(Auth::check()){
      $user=DB::table('users')->where('id',Auth::id())->first();
      if($user->isadmin==1){
        return redirect()->route('admin_dashboard');

      }else{
        return redirect()->route('home_display');
      }
    }
    else {
      return redirect()->route('display_login');

    }
  }
  public function user_dashboard(){
    if(!Auth::check())
        {
          return redirect()->route('display_login');
        }

    return view('user.welcome');
  }
  public function admin_dashboard(){
    if(!Auth::check())
        {
          return redirect()->route('display_login');
        }
    $available_profile=DB::table('users')->where('id',Auth::id())->first();
    return view('admin.dashboard')->with(['myprofile'=>$available_profile]);
  }

  public function course_add()
  {
    if(!Auth::check())
        {
          return redirect()->route('display_login');
        }
    $available_course=Course::all();
    $available_profile=DB::table('users')->where('id',Auth::id())->first();
    return view('admin.add_course')->with(['available_course'=>$available_course,'myprofile'=>$available_profile]);
  }
  public function admin_add()
  {
     if(!Auth::check())
        {
          return redirect()->route('display_login');
        }
        $available_profile=DB::table('users')->where('id',Auth::id())->first();
      return view('admin.add_admin')->with(['myprofile'=>$available_profile]);;
  }
  public function news_add()
  {
    if(!Auth::check())
        {
          return redirect()->route('display_login');
        }
    $available_news=News::all();
      $available_profile=DB::table('users')->where('id',Auth::id())->first();
    return view('admin.add_news')->with(['available_news'=>$available_news,'myprofile'=>$available_profile]);
  }
  public function adminprofile_add()
  {
    if(!Auth::check())
        {
          return redirect()->route('display_login');
        }
        $available_profile=DB::table('users')->where('id',Auth::id())->first();
      return view('admin.admin_profile')->with(['myprofile'=>$available_profile]);
  }


  public function course_add_submit(Request $request)
  {
    $this->validate($request,[
      'subject'=>'required',
      'credit_hours'=>'required',
      'semester'=>'required',
      'file'=>'required|mimes:JPG,jpg,png,PNG,jpeg,JPEG,gif,GIF,svg,SVG,pdf,PDF,docx,doc,DOCX,DOC',
      'course_description'=>'required',

    ]);

    $course=new Course;
    $course->subject=$request->input('subject');
    $course->credit_hours=$request->input('credit_hours');
    $course->semester=$request->input('semester');
    $course->course_description=$request->input('course_description');

    $file_name=$request->file('file')->getClientOriginalName();
    $file_extensions=$request->file('file')->getClientOriginalExtension();
    $file_full_name=$file_name;
    $request->file('file')->move(public_path('/course_file'),$file_full_name);
    $course->file=$file_full_name;
    $course->user_id=Auth::id();


    $course->save();
    return redirect()->route('course_add')->with('message','The Course has been successfully added');;
  }

  public function course_delete($id){
    DB::table('courses')->where('course_id',$id)->delete();
    return redirect()->route('course_add');
  }

  public function admin_add_submit(Request $request){
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
    $user_register->isadmin='1';
    $user_register->save();
    return redirect()->route('admin_add')->with('message','The Admin has been successfully created');;;
  }

  public function result_add()
  {
    if(!Auth::check())
        {
          return redirect()->route('display_login');
        }
    $available_profile=DB::table('users')->where('id',Auth::id())->first();
    $available_result=Result::all();
    return view('admin.add_result')->with(['available_result'=>$available_result,'myprofile'=>$available_profile]);
  }

  public function result_add_submit(Request $request)
  {
    $this->validate($request,[
      'symbol_no'=>'required',
      'college_name'=>'required',
      'date_of_birth'=>'required',
      'result_file'=>'required|mimes:JPG,jpg,png,PNG,jpeg,JPEG,gif,GIF,svg,SVG,pdf,PDF,docx,doc,DOCX,DOC',


    ]);

    $result=new Result;
    $result->symbol_no=$request->input('symbol_no');
    $result->college_name=$request->input('college_name');
    $result->date_of_birth=$request->input('date_of_birth');


    $result_file_name=$request->file('result_file')->getClientOriginalName();
    $result_file_extensions=$request->file('result_file')->getClientOriginalExtension();
    $result_file_full_name=$result_file_name;
    $request->file('result_file')->move(public_path('/result_file'),$result_file_full_name);
    $result->result_file=$result_file_full_name;
    $result->user_id=Auth::id();


    $result->save();
    return redirect()->route('result_add')->with('message','The Result has been successfully added');;
  }

  public function result_delete($id){
    DB::table('results')->where('result_id',$id)->delete();
    return redirect()->route('result_add');
  }

  public function news_delete($id){
    DB::table('news')->where('news_id',$id)->delete();
    return redirect()->route('news_add');
  }
  public function question_add()
  {
    if(!Auth::check())
        {
          return redirect()->route('display_login');
        }
          $available_profile=DB::table('users')->where('id',Auth::id())->first();
    $available_question=old_question::all();
    return view('admin.add_old_question')->with(['available_question'=>$available_question,'myprofile'=>$available_profile]);
  }

  public function question_add_submit(Request $request)
  {
    $this->validate($request,[
      'subject'=>'required',
      'semester'=>'required',
      'question_description'=>'required',
      'question_file'=>'required|mimes:JPG,jpg,png,PNG,jpeg,JPEG,gif,GIF,svg,SVG,pdf,PDF,docx,doc,DOCX,DOC',


    ]);

    $question=new old_question;
    $question->subject=$request->input('subject');
    $question->semester=$request->input('semester');
    $question->question_description=$request->input('question_description');

    $question_file_name=$request->file('question_file')->getClientOriginalName();
    $question_file_extensions=$request->file('question_file')->getClientOriginalExtension();
    $question_file_full_name=$question_file_name;
    $request->file('question_file')->move(public_path('/question_file'),$question_file_full_name);
    $question->question_file=$question_file_full_name;
    $question->user_id=Auth::id();


    $question->save();
    return redirect()->route('question_add')->with('message','The Question has been successfully added');
  }
  public function question_delete($id){
    if(!Auth::check())
        {
          return redirect()->route('display_login');
        }
    DB::table('old_questions')->where('question_id',$id)->delete();
    return redirect()->route('question_add');
  }

  public function college_add()
  {
    if(!Auth::check())
        {
          return redirect()->route('display_login');
        }
          $available_profile=DB::table('users')->where('id',Auth::id())->first();
    $available_college=college::all();
    return view('admin.add_college')->with(['available_college'=>$available_college,'myprofile'=>$available_profile]);
  }

  public function college_add_submit(Request $request)
  {
    $this->validate($request,[
      'college_name'=>'required',
      'college_seats'=>'required',
      'college_website'=>'required',
      'college_image'=>'required|mimes:JPG,jpg,png,PNG,jpeg,JPEG,gif,GIF,svg,SVG,pdf,PDF,docx,doc,DOCX,DOC',
      'college_location'=>'required',

    ]);

    $college=new college;
    $college->college_name=$request->input('college_name');
    $college->college_seats=$request->input('college_seats');
    $college->college_website=$request->input('college_website');

    $college_file_name=$request->file('college_image')->getClientOriginalName();
    $college_file_extensions=$request->file('college_image')->getClientOriginalExtension();
    $college_file_full_name=$college_file_name;
    $request->file('college_image')->move(public_path('/college_image'),$college_file_full_name);
    $college->college_image=$college_file_full_name;
    $college->college_location=$request->input('college_location');

    $college->user_id=Auth::id();


    $college->save();
    return redirect()->route('college_add')->with('message','The College has been successfully added');;
  }

  public function college_delete($id){
    if(!Auth::check())
        {
          return redirect()->route('display_login');
        }
    DB::table('colleges')->where('college_id',$id)->delete();
    return redirect()->route('college_add');
  }
  public function news_add_submit(Request $request){
    $this->validate($request,[
      'news_title'=>'required|max:255|min:4',
      'news_link'=>'required'
    ]);
    $news_register=new News;
    $news_register->news_title=$request->input('news_title');
    $news_register->news_link=$request->input('news_link');
    $news_register->save();
      $available_profile=DB::table('users')->where('id',Auth::id())->first();
    return redirect()->route('news_add')->with('message','The News has been successfully added');
  }
public function logout(Request $request)
{
  Auth::logout();
   return redirect()->route('display_login');

}

public function event_add(){
    if(!Auth::check())
        {
          return redirect()->route('display_login');
        };
        $available_event=event::all();
        $available_profile=DB::table('users')->where('id',Auth::id())->first();
    return view('admin.add_event')->with(['myprofile'=>$available_profile,'available_event'=>$available_event]);
  }

  public function event_add_submit(Request $request){
    $this->validate($request,[
      'event_name'=>'required',
      'event_description'=>'required',
      'event_location'=>'required',
    ]);
    $event_register=new Event;
    $event_register->event_name=$request->input('event_name');
    $event_register->event_description=$request->input('event_description');
    $event_register->event_location=$request->input('event_location');
      $event_register->user_id=Auth::id();
    $event_register->save();
      $available_profile=DB::table('users')->where('id',Auth::id())->first();
    return redirect()->route('event_add')->with('message','The event has been successfully added');
  }
  public function event_delete($id){
    if(!Auth::check())
        {
          return redirect()->route('display_login');
        }
    DB::table('events')->where('event_id',$id)->delete();
    return redirect()->route('event_add');
  }


}
