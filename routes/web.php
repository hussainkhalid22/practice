<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Middleware\AgeCheck;   
use App\Http\Middleware\CountryCheck;
// This is the web routes file for your Laravel application.
// Here you can define the routes for your application.

Route::get('/', [UserController::class, 'index']);
// You can also use a closure to return the welcome view
// Route::get('/', function () {
//     return view('welcome');
// });
// Route::view('/welcome/home/page', 'welcome')->name('home');
// Route::get('index', [UserController::class, 'index']);

// Route::view('/welcome/home/{name}', 'welcome')->name('user');
// Route::get('profile', [UserController::class, 'profile']);



Route::view('/about', 'about')->middleware(CountryCheck::class, AgeCheck::class);
// Route::get('/about', [UserController::class, 'about']);     
// This will return the about view using the UserController
// You can also use a closure to return the about view
// Route::get('/about', function () {
//     return view('about');
// });


// Route::get('/contact', [UserController::class, 'contact'])->middleware('check1');
Route::get('/contact', [UserController::class, 'contact']);
// Route::get('/contact', function () {
//     return view('contact');
// });



Route::get('/about/{id}', function ($id) {
    echo $id;
    // You can also return a view with the id
    // return view('about', ['id' => $id]);
    // Or you can return a view without the id
    return view('about');
});

Route::get('/user/{name?}', function ($name = 'Guest') {
    return "Hello, $name!";
    // You can also return a view with the name
    // return view('user', ['name' => $name]);
});

// Route::get('/admin/login', [UserController::class, 'adminLogin']);

Route::post('submit-form', [UserController::class, 'submitForm']);



Route::get('/login', [UserController::class, 'login']);
Route::post('submit-login', [UserController::class, 'submitLogin']);
