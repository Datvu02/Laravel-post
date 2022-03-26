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


// Route::get('/login', function () {
//   return view('login');
// })->name("login");
Route::prefix('auth')->name('auth.')->namespace('Auth')->group(function(){
  Route::get('/register', 'RegisterUserController@create' )->name('register')->middleware('guest');
  Route::post('/register', 'RegisterUserController@store' )->middleware('guest');
  Route::get('/login', 'LoginController@create' )->name('login')->middleware('guest');
  Route::post('/login', 'LoginController@authenticate' )->name('login')->middleware('guest');
  Route::post('/logout', 'LoginController@logout' )->name('logout');
});
Route::prefix('admin')->name('admin.')->namespace('Admin')->middleware('auth')->group(function(){
  // Trang chủ
  Route::get('/', 'DashboardController@index' )->name('home');
  

  //route phần xóa
  Route::prefix('/users')->name('users.')->group(function(){
    Route::get('/restore/{user_id}', 'UsersController@restore')->name("restore");
    Route::get('/deletesList', 'UsersController@deletesList')->name("deletesList");
  });
  Route::prefix('/tags')->name('tags.')->group(function(){
    Route::get('/restore/{tag_id}', 'TagsController@restore')->name("restore");
    Route::get('/deletesList', 'TagsController@deletesList')->name("deletesList");
  });
  Route::prefix('/categories')->name('categories.')->group(function(){
    Route::get('/restore/{category_id}', 'CategoriesController@restore')->name("restore");
    Route::get('/deletesList', 'CategoriesController@deletesList')->name("deletesList");
  });

  // route chính
  Route::Resource('users', UsersController::class)->parameters([
    'user' => 'user_id'
  ]);
  Route::Resource('tags', TagsController::class)->parameters([
    'tag' => 'tag_id'
  ]);
  Route::Resource('posts', PostsController::class)->parameters([
    'post' => 'post_id'
  ]);
  Route::Resource('categories', CategoriesController::class)->parameters([
    'category' => 'category_id'
  ]);
});
  
  //frontend

// Route::prefix('frontend')->name('frontend.')->group(function(){

//   Route::get('/', 'DashboardController@index' )->name('home');

// });

// auth

  
  