<?php


use App\Http\Controllers\AdminController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\MailNewsLetterController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\VolunteerController;
use App\Http\Controllers\WebController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContributeController;
use App\Http\Controllers\SponsorController;
Route::middleware(["auth","admin"])->group(function (){
    Route::get('/',[AdminController::class,"admin"]);
    Route::get('/profile',[AdminController::class,"profile"]);

    //web router

    Route::group(['prefix' => '/project-filemanager'], function () {
        \UniSharp\LaravelFilemanager\Lfm::routes();
    });

//Project Controllers
    Route::get('/projects',[ProjectController::class,"all"]);
    Route::get('/projects/add',[ProjectController::class,"add"]);
    Route::post('/projects/save',[ProjectController::class,"save"]);
    Route::get('/projects/edit/{id}',[ProjectController::class,"edit"]);
    Route::post('/projects/update/{id}',[ProjectController::class,"update"]);
    Route::delete('/projects/delete/{id}',[ProjectController::class,"delete"]);
    Route::get('/projects/active/{id}',[ProjectController::class,"active"]);
    Route::get('/projects/approval/{id}',[ProjectController::class,"approval"]);

    Route::get('/projects/important/{id}',[ProjectController::class,"important"]);
    Route::get('/projects/send-mail-news/{id}',[MailNewsLetterController::class,"sendEmailNews"]);
    Route::group(['prefix' => '/projects/project-filemanager'], function () {
        \UniSharp\LaravelFilemanager\Lfm::routes();
    });
    //.Project Controllers




    //Category
    Route::get('/category',[CategoryController::class,"all"]);
    Route::post('/category/save',[CategoryController::class,"save"]);
    Route::post('/category/update/{id}',[CategoryController::class,"update"]);
    Route::delete('/category/delete/{id}',[CategoryController::class,"delete"]);
    Route::get('/category/active/{id}',[CategoryController::class,"active"]);
    //.Category

    //user controller
    Route::get('/user',[UserController::class,"user"]);
    Route::post('/user/update/{id}',[UserController::class,"update"]);
    //.user controller


    //contribution Controller
    Route::get('/contribution',[ContributeController::class,"all"]);

    //Contact Controller
    Route::get('/contact',[ContactController::class,"all"]);
    Route::post('/contact/reply-contact/{id}',[ContactController::class,"reply"]);

    Route::get('/newsletter-sub-list',[MailNewsLetterController::class,"all"]);

    //volunteer Controller
    Route::get('/volunteer',[VolunteerController::class,"all"]);
    Route::get('/volunteer/admit/{id}',[VolunteerController::class,"admit"]);
    Route::post('/volunteer/refuse/{id}',[VolunteerController::class,"refuse"]);
    Route::get('/volunteer/important/{id}',[VolunteerController::class,"important"]);
    Route::delete('/volunteer/delete/{id}',[VolunteerController::class,"delete"]);
    Route::post('/volunteer/save',[VolunteerController::class,"save"]);
    Route::post('/volunteer/update/{id}',[VolunteerController::class,"update"]);

    //gallery
    Route::get('/gallery',[GalleryController::class,"all"]);
    Route::post('/gallery/save',[GalleryController::class,"save"]);
    Route::post('/gallery/update/{id}',[GalleryController::class,"update"]);
    Route::delete('/gallery/delete/{id}',[GalleryController::class,"delete"]);
    Route::get('/gallery/active/{id}',[GalleryController::class,"active"]);
    Route::group(['prefix' => '/gallery/project-filemanager'], function () {
        \UniSharp\LaravelFilemanager\Lfm::routes();
    });
    //Sponsor
    Route::get('/sponsor',[SponsorController::class,"all"]);
    Route::post('/sponsor/save',[SponsorController::class,"save"]);
    Route::get('/sponsor/active/{id}',[SponsorController::class,"active"]);
    Route::delete('/sponsor/delete/{id}',[SponsorController::class,"delete"]);
    Route::group(['prefix' => '/sponsor/project-filemanager'], function () {
        \UniSharp\LaravelFilemanager\Lfm::routes();
    });

});


