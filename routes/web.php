<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::statamic('example', 'example-view', [
//    'title' => 'Example'
// ]);

Route::statamic('products', 'products', [
    'title' => 'Products',
]);

Route::statamic('/posts', 'posts.index', [
    'title' => 'Our Posts',
]);
Route::statamic('/posts/{slug}', 'posts.show', [
    'title' => 'Post Details',
]);