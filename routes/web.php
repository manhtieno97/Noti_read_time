<?php

use Illuminate\Support\Facades\Route;

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
/*
Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/','RedisController@home')->name('home') ;
Route::get('send-noti','RedisController@getSendNoti')->name('home') ;
Route::post('send-noti','RedisController@postSendNoti')->name('send_noti')  ;

Route::get('send-message','RedisController@index')->name('chat') ;
Route::post('send-message','RedisController@postSendMessage') ;
