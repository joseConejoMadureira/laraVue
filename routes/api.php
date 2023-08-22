<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
$ProductController = 'App\Http\Controllers\ProductController';

Route::apiResource('test','App\Http\Controllers\TestController');
Route::apiResource('products',$ProductController);
