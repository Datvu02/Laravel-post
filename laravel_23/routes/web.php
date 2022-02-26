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

Route::get('/', function () {
    return view('welcome');
})->name("home");

Route::get('/login', function () {
  return view('login');
})->name("login");

Route::prefix('admin')->name('admin.')->group(function(){

  Route::get('/dashboard', function(){
    return view("dashboard");
  })->name('dashboard');


  Route::prefix('users')->name('users.')->group(function(){
    Route::get('/list', function(){
      return view('users/list');
    })->name('listUsers');

    Route::get('/show/{id}', function($id){
      return "Backend show User" .$id;
    })->name('show');
    
    Route::get('/create', function(){
      return view('users/create');
    })->name('create');
    
    Route::post('/store', function(){
      return redirect()->route('admin.users.listUsers');
      // return 'ádsad';
    })->name('store');

    Route::get('/edit/{id}', function($id){
      return view('users/edit');
    })->name('edit');

    Route::put('/update/{id}', function($id){
      return redirect()->route('admin.users.listUsers');
    })->name('update');
    
    Route::get('/delete/{id}', function($id){
      return redirect()->route('backend.user.index');
    })->name('delete');
  });

  Route::prefix('categories')->name('categories.')->group(function(){
    Route::get('/list', function(){
      return view('categories/list');
    })->name('listCategories');

    Route::get('/show/{id}', function($id){
      return "Backend show categories" .$id;
    })->name('show');
    
    Route::get('/create', function(){
      return view('categories/create');
    })->name('create');
    
    Route::post('/store', function(){
      return redirect()->route('admin.categories.listCategories');
      // return 'ádsad';
    })->name('store');

    Route::get('/edit/{id}', function($id){
      return view('categories/edit');
    })->name('edit');

    Route::put('/update/{id}', function($id){
      return redirect()->route('admin.categories.listCategories');
    })->name('update');
    
    Route::get('/delete/{id}', function($id){
      return redirect()->route('backend.categories.index');
    })->name('delete');
  });

  Route::prefix('posts')->name('posts.')->group(function(){
    Route::get('/list', function(){
      return view('posts/list');
    })->name('listPosts');

    Route::get('/show/{id}', function($id){
      return "Backend show posts" .$id;
    })->name('show');
    
    Route::get('/create', function(){
      return view('posts/create');
    })->name('create');
    
    Route::post('/store', function(){
      return redirect()->route('admin.posts.listPosts');
      // return 'ádsad';
    })->name('store');

    Route::get('/edit/{id}', function($id){
      return view('posts/edit');
    })->name('edit');

    Route::put('/update/{id}', function($id){
      return redirect()->route('admin.posts.listPosts');
    })->name('update');
    
    Route::get('/delete/{id}', function($id){
      return redirect()->route('backend.posts.index');
    })->name('delete');
  });
  
});
