<?php


use App\Http\Controllers\AdminController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\VolunteerController;
use App\Http\Controllers\WebController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContributeController;
Route::middleware(["auth","admin"])->group(function (){
    Route::get('/',[AdminController::class,"admin"]);
    Route::get('/profile',[AdminController::class,"profile"]);
    Route::get('/greeting/{locale}', function ($locale) {
        if (! in_array($locale, ['en', 'es', 'fr'])) {
            abort(400);
        }
        App::setLocale($locale);
    });

    //web router

    Route::group(['prefix' => '/project-filemanager'], function () {
        \UniSharp\LaravelFilemanager\Lfm::routes();
    });

//Post Controllers
    Route::get('/posts',[PostController::class,"all"]);
    Route::get('/posts/add',[PostController::class,"add"]);
    Route::post('/post/save',[PostController::class,"save"]);
    Route::get('/posts/edit/{id}',[PostController::class,"edit"]);
    Route::post('/posts/update/{id}',[PostController::class,"update"]);
    Route::delete('/posts/delete/{id}',[PostController::class,"delete"]);
    // Route::get('/posts/hidden/{id}',[PostController::class,"hidden"]);
    Route::get('/posts/active/{id}',[PostController::class,"active"]);
    Route::get('/posts/normal/{id}',[PostController::class,"normal"]);
    Route::get('/posts/important/{id}',[PostController::class,"important"]);
    Route::get('/posts/send-mail-news/{id}',[MailController::class,"sendEmailNews"]);
    Route::group(['prefix' => '/posts/project-filemanager'], function () {
        \UniSharp\LaravelFilemanager\Lfm::routes();
    });
    //.Post Controllers




    //Category
    Route::get('/category',[CategoryController::class,"all"]);
    Route::post('/category/save',[CategoryController::class,"save"]);
    Route::post('/category/update/{id}',[CategoryController::class,"update"]);
    Route::delete('/category/delete/{id}',[CategoryController::class,"delete"]);
    Route::get('/category/hidden/{id}',[CategoryController::class,"hidden"]);
    Route::get('/category/appear/{id}',[CategoryController::class,"appear"]);
    //.Category


    //user controller
    Route::get('/user',[UserController::class,"user"]);
    Route::post('/user/update/{id}',[UserController::class,"update"]);
    //.user controller



    //contribution Controller
    Route::get('/contribution',[ContributeController::class,"all"]);

    //Contact Controller
    Route::get('/contact',[ContactController::class,"all"]);

    //volunteer Controller
    Route::get('/volunteer',[VolunteerController::class,"all"]);

    //gallery
    Route::get('/gallery',[GalleryController::class,"all"]);
    Route::post('/gallery/save',[GalleryController::class,"save"]);
    Route::post('/gallery/update/{id}',[GalleryController::class,"update"]);
    Route::delete('/gallery/delete/{id}',[GalleryController::class,"delete"]);
    Route::get('/gallery/active/{id}',[GalleryController::class,"active"]);

    Route::group(['prefix' => '/gallery/project-filemanager'], function () {
        \UniSharp\LaravelFilemanager\Lfm::routes();
    });

});


