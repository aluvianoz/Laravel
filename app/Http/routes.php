<?php
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('/', function () {
    return view('welcome');
});
//ruta para admin
Route::get('admin/',function(){
  return view('admin.home');
});

Route::group(['prefix' => 'admin', 'middleware' => 'auth'],function(){
        Route::resource('users','UserController');
        Route::get('users/{id}/destroy',['uses' => 'UserController@destroy', 'as' => 'admin.users.destroy']);
          //categorias
        Route::resource('categories','CategoryController');
        Route::get('categories/{id}/destroy',['uses' => 'CategoryController@destroy', 'as' => 'admin.categories.destroy']);

});

//rutas Login
Route::get('admin/login',[
  'uses'=> 'Auth\AuthController@showLogin', 'as' => 'admin.auth.login'
]);

Route::post('admin/login',[
  'uses' => 'Auth\AuthController@login', 'as' =>'admin.auth.login'
]);

Route::get('admin/logout',[
  'uses' => 'Auth\AuthController@logout', 'as' =>'admin.auth.logout'
]);
