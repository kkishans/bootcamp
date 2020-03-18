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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/developers', function () {
    return view('developers');
});

Route::get('/ticket', function () {
    return view('makepdf');
});
Route::get('/sucess', function () {
    return view('registered');
});

Route::get('/registration',[
  'uses' => 'StudentController@index',
  'as'   => 'registration'
]);


  // --> bro will create countroller and add it frist and set all route as your required

Auth::routes();

Route::resource('student', 'StudentController');

Route::get('/home',[
    'uses' => 'HomeController@index',
    'as'   => 'home'
]);
 Route::group(['prefix'=>'admin','middleware'=>'auth'], function() {
   Route::resource('course', 'CourseController');
   Route::resource('seat', 'SeatController');
 });

 Route::patch('admin/seat/{id}/up', 'SeatController@up')->name('seat.up');
 Route::patch('admin/seat/{id}/down', 'SeatController@down')->name('seat.down');
