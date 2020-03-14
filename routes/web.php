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

Route::get('/registration', function () {
    return view('registration');
})->name('registration');


  // --> bro will create countroller and add it frist and set all route as your required

Auth::routes();

//Route::resource('course', 'CourseController');

Route::get('/home',[
    'uses' => 'HomeController@index',
    'as'   => 'home'
]);
 Route::group(['prefix'=>'admin','middleware'=>'auth'], function() {
   Route::resource('course', 'CourseController');
 });