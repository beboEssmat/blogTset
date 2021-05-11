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

Route::get('/test1', function() {
    return 'first project';
});
// prefix دي علشان مش كل شوية هكتب يوزر في الروت قبل الاندكس
Route::group(['prefix'=>'users', 'middleware' => 'auth'], function() {
    Route::get('/index', function() {
        return 'abanoub essmat';
    });
});


Route::group(['namespace' => 'User'], function() {
    Route::get('show_user', 'UserController@showUser');
    Route::get('show_user2', 'UserController@showUser2');
});

Route::resource('news', 'NewsController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');
