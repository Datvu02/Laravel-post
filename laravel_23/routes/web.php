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


Route::get('/login', function () {
  return view('login');
})->name("login");

Route::prefix('admin')->name('admin.')->namespace('Admin')->group(function(){

  Route::get('/', 'DashboardController@index' )->name('home');

  Route::Resource('users', UsersController::class)->parameters([
    'user' => 'user_id'
  ]);
  // Route::get('/user/restore/{user_id}', 'CategoriesControllers@restore')->name("users.restore");
  Route::Resource('posts', PostsController::class)->parameters([
    'post' => 'post_id'
  ]);
  
  Route::prefix('/categories')->name('categories.')->group(function(){
    Route::get('/restore/{category_id}', 'CategoriesController@restore')->name("restore");
    Route::get('/deletesList', 'CategoriesController@deletesList')->name("deletesList");
  });
  Route::Resource('categories', CategoriesController::class)->parameters([
    'category' => 'category_id'
  ]);
});