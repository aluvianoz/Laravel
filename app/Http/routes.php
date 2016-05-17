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
Route::get('/',[
  'uses' => 'FrontController@index',
'as' => 'front.index'
]);

Route::get('categories/{name}',[
  'uses' => 'FrontController@searchCategory',
  'as' => 'front.search.category'
]);

Route::get('tags/{name}',[
  'uses' => 'FrontController@searchTag',
  'as' => 'front.search.tag'
]);

//rutas de administrador

Route::group(['prefix' => 'admin', 'middleware' => 'auth'],function(){

        Route::get('/', ['as' => 'admin.home', function(){
          return view('admin.home');
        }]);

        Route::resource('users','UserController');
        Route::get('users/{id}/destroy',['uses' => 'UserController@destroy', 'as' => 'admin.users.destroy']);
          //categorias
        Route::resource('categories','CategoryController');
        Route::get('categories/{id}/destroy',[
          'uses' => 'CategoryController@destroy', 'as' => 'admin.categories.destroy'
        ]);
        //tags
        Route::resource('tags','TagController');
        Route::get('tags/{id}/destroy',[
          'uses' => 'TagController@destroy', 'as' => 'admin.tags.destroy'
        ]);

        Route::resource('articles', 'ArticleController');
        Route::get('articles/{id}/destroy',[
          'uses' => 'ArticleController@destroy', 'as' => 'admin.articles.destroy'
        ]);

        Route::get('images',[
          'uses'=> 'ImageController@index',
          'as' => 'admin.images.index'
        ]);
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
