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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

route::get('my',function(){
   return'me';
});
route::get('sis/{id?}',function(){
   return 'sis';
})->name('a');
route::get('mom/{id}',function($id){
   return 'hayouma';
})->name('b');
route::get('admin','front\UserController@getAdmin');

route::group(['namespace'=>'front','middleware'=>'auth'],function(){
   route::get('mye','UserController@getMy');
   route::get('id','UserController@getId');
   route::get('age','UserController@getAge');
});

route::group(['prefix'=>'ahmad'],function(){
    route::get('a','front\UserController@getMya');
    route::get('ida','front\UserController@getIda');
    route::get('agea','front\UserController@getAgea');
});
route::get('bob','front\UserController@getBobName');
route::get('landing','front\UserController@getLanding');
