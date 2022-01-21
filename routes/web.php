<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'App\Http\Controllers\MenuController@index')->name('index');

Route::get('/category/{category}', 'App\Http\Controllers\MenuController@category');

Route::get('/item/{item}', 'App\Http\Controllers\MenuController@item');

Route::get('/cartlist', 'App\Http\Controllers\CartController@index')->name('cartlist_index');

Route::post('/cartlist', 'App\Http\Controllers\CartController@store')->name('cartlist_store');

// Route::resource('cartlist', 'App\Http\Controllers\CartController', ['except' => ['']]);

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
