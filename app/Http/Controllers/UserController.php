<?php

namespace App\Http\Controllers;
use App\Course;
use App\Event;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function home_display()
    {
          return view('user.welcome');
    }
    public function course_display()
    {
       $available_course=Course::all();
          return view('user.course_info')->with(['available_course'=>$available_course]);
    }
    public function event_display()
    {
       $available_event=Event::all();
          return view('user.event_info')->with(['available_event'=>$available_event]);
    }
}
