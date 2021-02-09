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
});

Route::get('test-route', function () {
    return "Hello Laravel!";
});

Route::get('user/{id}', function($id) {
    echo 'ID của user là: ' . $id;
});


Route::get('user/{id}/{name}/{comment}', function($id, $name, $comment) {
    echo 'ID của user là: ' . $id . '<br>';
    echo 'Tên của user là: ' . $name . '<br>';
    echo 'Comment của user: ' . $comment . '<br>';
});

Route::get('layten', function () {
    echo "Nguyen Van Dat";
})->name('layten');
