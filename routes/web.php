<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/','LoginController@display_login')->name('display_login');
Route::POST('/login/submit','LoginController@check_login')->name('check_login');


Route::get('/register','RegisterController@display_register')->name('display_register');
Route::post('/register/submit','RegisterController@register_store')->name('register_store');

Route::get('/dashboard','DashController@dashboard')->name('dashboard');
Route::get('/admin/dashboard','DashController@admin_dashboard')->name('admin_dashboard');




Route::get('/admin/add-course','DashController@course_add')->name('course_add');
Route::POST('/admin/add-course/submit','DashController@course_add_submit')->name('course_add_submit');
Route::get('/admin/add-course/{id}/delete','DashController@course_delete')->name('course_delete');


Route::get('/admin/add-result','DashController@result_add')->name('result_add');
Route::POST('/admin/add-result/submit','DashController@result_add_submit')->name('result_add_submit');
Route::get('/admin/add-result/{id}/delete','DashController@result_delete')->name('result_delete');

Route::get('/admin/add-question','DashController@question_add')->name('question_add');
Route::POST('/admin/add-question/submit','DashController@question_add_submit')->name('question_add_submit');
Route::get('/admin/add-question/{id}/delete','DashController@question_delete')->name('question_delete');

Route::get('/admin/add-college','DashController@college_add')->name('college_add');
Route::POST('/admin/add-college/submit','DashController@college_add_submit')->name('college_add_submit');
Route::get('/admin/add-college/{id}/delete','DashController@college_delete')->name('college_delete');


Route::get('/admin/add-news','DashController@news_add')->name('news_add');
Route::POST('/admin/add-news/submit','DashController@news_add_submit')->name('news_add_submit');
Route::get('/admin/add-news/{id}/delete','DashController@news_delete')->name('news_delete');

Route::get('/admin/admin-profile','DashController@adminprofile_add')->name('adminprofile_add');


Route::get('/admin/add-admin','DashController@admin_add')->name('admin_add');
Route::POST('/admin/add-admin/submit','DashController@admin_add_submit')->name('admin_add_submit');

Route::get('/admin/add-event','DashController@event_add')->name('event_add');
Route::POST('/admin/add-event/submit','DashController@event_add_submit')->name('event_add_submit');
Route::get('/admin/add-event/{id}/delete','DashController@event_delete')->name('event_delete');




Route::get('/admin/logout','DashController@logout')->name('logout');





Route::get('/user/home','UserController@home_display')->name('home_display');
Route::get('/user/course-info','UserController@course_display')->name('course_display');
Route::get('/user/event-info','UserController@event_display')->name('event_display');
