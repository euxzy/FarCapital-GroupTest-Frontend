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

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/index', function () {
    return view('index');
});

Route::get('/', function () {
    return view('aspirasi');
});

Route::get('/login', function () {
    return view('login');
});


Route::get('admin/dashboard', function () {
    return view('admin.dashboard');
});

Route::get('admin/detail', function () {
    return view('admin.detail');
});
