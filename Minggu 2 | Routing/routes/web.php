<?php

use Illuminate\Http\Request;
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

Route::get('/', function () {
    return view('welcome');
});

//Saat url /login diketik akan menampilkan views login.blade.php
Route::view('login', 'login');

//Menampilkan semua hasil dari $request yang dikirim melalui POST
Route::post('/proseslogin', function (Request $request) {
    dd($request);
});

//Ketika memasukkan /proseslogin langsung dengan method GET akan dialihkan ke url /login
Route::get('/proseslogin', function () {
    return redirect('/login');
});

//Ketika memasukkan "/users/nama" maka akan menampilkan nama user
//Ketika hanya memasukkan "/users" maka akan menampilkan nama user yang sudah diatur
Route::get('/users/{id?}', function ($id = "Mochammad Indra Maulidana") {
    return $id;
})->where(['id' => '[a-zA-Z]+']);
//where diatas digunakan untuk membatasi penulisan id hanya karakter a-z saja

//Memungkinkan semua karakter bisa dimasukkan
Route::get('/pengguna/{id}', function ($id = "Mochammad Indra Maulidana") {
    return "pengguna " . $id;
})->where(['id' => '.*']);

//Route Bernama
Route::get('/dashboard', function () {
    return "Ini Dashboard";
})->name('dashboard');

Route::get('/home', function () {
    return redirect()->route('dashboard');
});

//Group Routing dengan middleware
Route::middleware(['auth', 'second'])->group(function () {
    Route::get('/homepage', function () {
        return "ini homepage";
    });

    //DImana route /homepage harus melewati middleware auth dan second terlebih dahulu
});

//Group Routing dengan namespace
Route::namespace('admin')->group(function () {
    Route::get('/profileadmin', function () {
        return "ini Profile";
    });
});

//Subdomain Routing
Route::domain('zamm346.com')->group(function () {
    Route::get('/test', function () {
        return "Halooo semua";
    });
});

//Group Routing dengan prefix
Route::prefix('guest')->group(function () {
    //Maka penulisan urlnya yaitu /guest/profile
    Route::get('/profileguest', function () {
        return "ini profile guest";
    });

    //DImana route /dashboard harus melewati middleware auth dan second terlebih dahulu
});
