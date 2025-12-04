<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\CategoryController;


Route::get('/',[CategoryController::class, 'index']);
Route::resource('items', ItemController::class);
Route::resource('categories', CategoryController::class);
