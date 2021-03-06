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


//Test if routes are working
//Route::get('/test', function(){
//
//    echo "TEST";
//
//});

//Route::get('/sendemail', function(){
//
//    $data = [
//
//        'title'=>'',
//        'content'=>''
//
//    ];
//
//    Mail::send('emails.test', $data, function($message){
//
//        $message->to('', '')->subject('');
//
//    });
//
//});

Route::auth();

Route::group(['middleware' => ['auth']], function () {

    Route::get('/home', 'HomeController@index')->name('home');

});

