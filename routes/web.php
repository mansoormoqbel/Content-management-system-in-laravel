<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/*     Start Posts        */
Route::get('/post/index',[App\Http\Controllers\PostController::class,'index'])->name('post.index');
Route::get('/post/create',[App\Http\Controllers\PostController::class,'create'])->name('post.create');
Route::post('/post/store',[App\Http\Controllers\PostController::class,'store'])->name('post.store');
Route::get('/post/show/{id}',[App\Http\Controllers\PostController::class,'show'])->name('post.show');
Route::get('/post/edit/{id}',[App\Http\Controllers\PostController::class,'edit'])->name('post.edit');
Route::post('/post/update/{id}',[App\Http\Controllers\PostController::class,'update'])->name('post.update');
Route::get('/post/destroy/{id}',[App\Http\Controllers\PostController::class,'destroy'])->name('post.destroy');

/*     End Posts      */ 


/*     Start category        */

Route::get('/category/index',[App\Http\Controllers\CategoryController::class,'index'])->name('category.index');
Route::get('/category/create',[App\Http\Controllers\CategoryController::class,'create'])->name('category.create');
Route::post('/category/store',[App\Http\Controllers\CategoryController::class,'store'])->name('category.store');
Route::get('/category/show/{id}',[App\Http\Controllers\CategoryController::class,'show'])->name('category.show');
Route::get('/category/edit/{id}',[App\Http\Controllers\CategoryController::class,'edit'])->name('category.edit');
Route::post('/category/update/{id}',[App\Http\Controllers\CategoryController::class,'update'])->name('category.update');
Route::get('/category/destroy/{id}',[App\Http\Controllers\CategoryController::class,'destroy'])->name('category.destroy');

/*     End category      */ 
/*     Start Tag        */

Route::get('/tag/index',[App\Http\Controllers\TagController::class,'index'])->name('tag.index');
Route::get('/tag/create',[App\Http\Controllers\TagController::class,'create'])->name('tag.create');
Route::post('/tag/store',[App\Http\Controllers\TagController::class,'store'])->name('tag.store');
Route::get('/tag/show/{id}',[App\Http\Controllers\TagController::class,'show'])->name('tag.show');
Route::get('/tag/edit/{id}',[App\Http\Controllers\TagController::class,'edit'])->name('tag.edit');
Route::post('/tag/update/{id}',[App\Http\Controllers\TagController::class,'update'])->name('tag.update');
Route::get('/tag/destroy/{id}',[App\Http\Controllers\TagController::class,'destroy'])->name('tag.destroy');

/*     End category      */ 
