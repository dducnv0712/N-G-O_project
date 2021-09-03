<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContributeController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\MailNewsLetterController;
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;
Route::middleware(["auth","volunteer"])->group(function (){
Route::get('/',[AdminController::class,"admin"]);

//project controller
Route::get('/projects',[ProjectController::class,"all"]);
Route::get('/projects/add',[ProjectController::class,"add"]);
Route::post('/projects/save',[ProjectController::class,"save"]);
Route::get('/projects/edit/{id}',[ProjectController::class,"edit"]);
Route::post('/projects/update/{id}',[ProjectController::class,"update"]);
Route::delete('/projects/delete/{id}',[ProjectController::class,"delete"]);
Route::get('/projects/active/{id}',[ProjectController::class,"active"]);
Route::get('/projects/important/{id}',[ProjectController::class,"important"]);
Route::get('/projects/send-mail-news/{id}',[MailNewsLetterController::class,"sendEmailNews"]);

//gallery controller
Route::get('/gallery',[GalleryController::class,"all"]);
Route::post('/gallery/save',[GalleryController::class,"save"]);
Route::post('/gallery/update/{id}',[GalleryController::class,"update"]);
Route::delete('/gallery/delete/{id}',[GalleryController::class,"delete"]);
Route::get('/gallery/active/{id}',[GalleryController::class,"active"]);
//contribution controller
    Route::get('/contribution',[ContributeController::class,"all"]);

    Route::group(['prefix' => 'project-filemanager', 'middleware' => ['web', 'auth']], function () {
        \UniSharp\LaravelFilemanager\Lfm::routes();
    });
    Route::group(['prefix' => 'project-filemanager', 'middleware' => ['web', 'auth']], function () {
        \UniSharp\LaravelFilemanager\Lfm::routes();
    });
});
Route::group(['prefix' => 'project-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});
