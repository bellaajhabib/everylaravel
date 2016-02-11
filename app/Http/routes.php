<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/




Route::get('/tupperware',function () {
    return view('tupperwarearts.index');
});

Route::get('/',array('middleware'=>'auth',function () {
    return view('welcome');
}));
Route::get('/foo', 'FooController@foo');
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::get('about/directions',array('as'=>'directions',function(){
   $theUrl= URL::route("directions");
    return "This URL is {$theUrl}";
}));
Route::get('about/classess/{theArt}/{theSomething}',function($theArt,$theSomething){

    return "Welcom to {$theArt} in {$theSomething}";
});
Route::get('where',function(){
   return \Illuminate\Support\Facades\Redirect::to('directions');
});
Route::group(['middleware' => ['web']], function () {
    //
});
