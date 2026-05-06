<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user', [UserController::class, 'getUser']);
Route::get('/about', [UserController::class, 'aboutUser']);
Route::get('/user/{name}', [UserController::class, 'getUserName']);
Route::get('/admin/login', [UserController::class, 'login']);
// Route::get('/about', function () {
//     return view('about');
// }); 
Route::get('/about/{name}', [UserController::class, 'about']); 
Route::get('/admin/hello', function () {
    return view('admin.hello');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/user-form', function () {
    return view('user-Form');
});