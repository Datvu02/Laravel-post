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

  Route::prefix('/users')->name('users.')->group(function(){
    Route::get('/index', function(){
      return view('admin.users.index');
    })->name('index');

    Route::get('/show/{id}', function($id){
      return "admin show User" .$id;
    })->name('show');
    
    Route::get('/create', function(){
      return view('admin.users.create');
    })->name('create');
    
    Route::post('/store', function(){
      return redirect()->route('admin.users.index');
      // return 'ádsad';
    })->name('store');

    Route::get('/edit/{id}', function($id){
      return view('admin.users.edit');
    })->name('edit');

    Route::put('/update/{id}', function($id){
      return redirect()->route('admin.users.index');
    })->name('update');
    
    Route::get('/delete/{id}', function($id){
      return redirect()->route('admin.users.index');
    })->name('delete');
  });

  Route::prefix('categories')->name('categories.')->group(function(){
    Route::get('/index', function(){
      return view('admin.categories.index');
    })->name('index');

    Route::get('/show/{id}', function($id){
      return "admin show categories" .$id;
    })->name('show');
    
    Route::get('/create', function(){
      return view('admin.categories.create');
    })->name('create');
    
    Route::post('/store', function(){
      return redirect()->route('admin.categories.index');
      // return 'ádsad';
    })->name('store');

    Route::get('/edit/{id}', function($id){
      return view('admin.categories.edit');
    })->name('edit');

    Route::put('/update/{id}', function($id){
      return redirect()->route('admin.categories.index');
    })->name('update');
    
    Route::get('/delete/{id}', function($id){
      return redirect()->route('admin.categories.index');
    })->name('delete');
  });

  Route::prefix('posts')->name('posts.')->group(function(){
    Route::get('/index', function(){
      return view('admin.posts.index');
    })->name('index');

    Route::get('/show/{id}', function($id){
      return "admin show posts" .$id;
    })->name('show');
    
    Route::get('/create', function(){
      return view('admin.posts.create');
    })->name('create');
    
    Route::post('/store', function(){
      return redirect()->route('admin.posts.index');
      // return 'ádsad';
    })->name('store');

    Route::get('/edit/{id}', function($id){
      return view('admin.posts.edit');
    })->name('edit');

    Route::put('/update/{id}', function($id){
      return redirect()->route('admin.posts.index');
    })->name('update');
    
    Route::get('/delete/{id}', function($id){
      return redirect()->route('admin.posts.index');
    })->name('delete');
  });
});