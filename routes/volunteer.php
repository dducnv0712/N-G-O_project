<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
Route::middleware(["auth","author"])->group(function (){
Route::get('/profile',[AdminController::class,"profile"]);
Route::get('/',[AdminController::class,"admin"]);
Route::get('/posts',[PostController::class,"all"]);
Route::get('/posts/add',[PostController::class,"add"]);
Route::post('/post/save',[PostController::class,"save"]);
Route::get('/posts/edit/{id}',[PostController::class,"edit"]);
Route::post('/posts/update/{id}',[PostController::class,"update"]);
Route::delete('/posts/delete/{id}',[PostController::class,"delete"]);
Route::get('/posts/hidden/{id}',[PostController::class,"hidden"]);
Route::get('/posts/appear/{id}',[PostController::class,"appear"]);
Route::get('/posts/normal/{id}',[PostController::class,"normal"]);
Route::get('/posts/important/{id}',[PostController::class,"important"]);
Route::get('/posts/send-mail-news/{id}',[MailController::class,"sendEmailNews"]);
});
