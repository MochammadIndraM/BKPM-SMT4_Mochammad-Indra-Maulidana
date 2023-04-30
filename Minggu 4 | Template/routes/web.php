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

Route::prefix('minggu4')->group(function () {
    // TODO: Prefix minggu4
    Route::prefix('admin')->group(function () {
        // TODO: Prefix minggu4
        // TODO: /minggu4/admin/
        Route::get('/', function () {
            return view('minggu4.admin.dashboard');
        })->name('minggu4.admin.dashboard');
    });

    // TODO: /minggu4/
    Route::get('/', function () {
        return view('minggu4.landing.main');
    });
});
