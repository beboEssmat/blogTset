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


Route::get('/home_admin', function() {
    return 'admin';
});

//علشان لما اجس اقسم كلة حد ليه ملف الكنترولر لوحدة
Route::namespace('AdminResourse')->group(function () {
    Route::get('/admin', 'adminController@show_admin');
});
