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

Route::prefix('frontend')->name('frontend.')->group(function(){

  Route::get('/index', function(){
    return view('frontend/dashboard');
  })->name('home');

  Route::prefix('/users')->name('users.')->group(function(){
    Route::get('/index', function(){
      return view('frontend.users.index');
    })->name('index');

    Route::get('/show/{id}', function($id){
      return "frontend show User" .$id;
    })->name('show');
    
    Route::get('/create', function(){
      return view('frontend.users.create');
    })->name('create');
    
    Route::post('/store', function(){
      return redirect()->route('frontend.users.index');
      // return 'ádsad';
    })->name('store');

    Route::get('/edit/{id}', function($id){
      return view('frontend.users.edit');
    })->name('edit');

    Route::put('/update/{id}', function($id){
      return redirect()->route('frontend.users.index');
    })->name('update');
    
    Route::get('/delete/{id}', function($id){
      return redirect()->route('frontend.users.index');
    })->name('delete');
  });

  Route::prefix('categories')->name('categories.')->group(function(){
    Route::get('/index', function(){
      return view('frontend.categories.index');
    })->name('index');

    Route::get('/show/{id}', function($id){
      return "frontend show categories" .$id;
    })->name('show');
    
    Route::get('/create', function(){
      return view('frontend.categories.create');
    })->name('create');
    
    Route::post('/store', function(){
      return redirect()->route('frontend.categories.index');
      // return 'ádsad';
    })->name('store');

    Route::get('/edit/{id}', function($id){
      return view('frontend.categories.edit');
    })->name('edit');

    Route::put('/update/{id}', function($id){
      return redirect()->route('frontend.categories.index');
    })->name('update');
    
    Route::get('/delete/{id}', function($id){
      return redirect()->route('frontend.categories.index');
    })->name('delete');
  });

  Route::prefix('posts')->name('posts.')->group(function(){
    Route::get('/index', function(){
      return view('frontend.posts.index');
    })->name('index');

    Route::get('/show/{id}', function($id){
      return "frontend show posts" .$id;
    })->name('show');
    
    Route::get('/create', function(){
      return view('frontend.posts.create');
    })->name('create');
    
    Route::post('/store', function(){
      return redirect()->route('frontend.posts.index');
      // return 'ádsad';
    })->name('store');

    Route::get('/edit/{id}', function($id){
      return view('frontend.posts.edit');
    })->name('edit');

    Route::put('/update/{id}', function($id){
      return redirect()->route('frontend.posts.index');
    })->name('update');
    
    Route::get('/delete/{id}', function($id){
      return redirect()->route('frontend.posts.index');
    })->name('delete');
  });
});