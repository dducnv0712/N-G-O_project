<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\MailNewsLetterController;
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;
Route::middleware(["auth","volunteer"])->group(function (){
Route::get('/profile',[AdminController::class,"profile"]);
Route::get('/',[AdminController::class,"admin"]);
Route::get('/projects',[ProjectController::class,"all"]);
Route::get('/projects/add',[ProjectController::class,"add"]);
Route::post('/post/save',[ProjectController::class,"save"]);
Route::get('/projects/edit/{id}',[ProjectController::class,"edit"]);
Route::post('/projects/update/{id}',[ProjectController::class,"update"]);
Route::delete('/projects/delete/{id}',[ProjectController::class,"delete"]);
Route::get('/projects/hidden/{id}',[ProjectController::class,"hidden"]);
Route::get('/projects/appear/{id}',[ProjectController::class,"appear"]);
Route::get('/projects/normal/{id}',[ProjectController::class,"normal"]);
Route::get('/projects/important/{id}',[ProjectController::class,"important"]);
Route::get('/projects/send-mail-news/{id}',[MailNewsLetterController::class,"sendEmailNews"]);
//    Route::group(['prefix' => '/projects/project-filemanager'], function () {
//        \UniSharp\LaravelFilemanager\Lfm::routes();
//    });
//    Route::group(['prefix' => '/gallery/project-filemanager'], function () {
//        \UniSharp\LaravelFilemanager\Lfm::routes();
//    });
});
