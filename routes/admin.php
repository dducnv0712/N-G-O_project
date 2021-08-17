<?php


use App\Http\Controllers\MailController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\WebController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
Route::middleware(["auth","admin"])->group(function (){
    Route::get('/',[WebController::class,"admin"]);
    Route::get('/contributor',[WebController::class,"Contributor"]);
    Route::get('/digital-wallet',[WebController::class, "Digital_wallet"]);
    Route::get('/credit-cart',[WebController::class,"Credit_cart"]);




//Post Controllers
    Route::get('/posts',[PostController::class,"all"]);
    Route::get('/posts/add',[PostController::class,"add"]);
    Route::post('/post/save',[PostController::class,"save"]);
    Route::get('/posts/edit/{id}',[PostController::class,"edit"]);
    Route::post('/posts/update/{id}',[PostController::class,"update"]);
    Route::get('/posts/delete/{id}',[PostController::class,"delete"]);
    Route::get('/posts/hidden/{id}',[PostController::class,"hidden"]);
    Route::get('/posts/appear/{id}',[PostController::class,"appear"]);
    Route::get('/posts/normal/{id}',[PostController::class,"normal"]);
    Route::get('/posts/important/{id}',[PostController::class,"important"]);
    Route::get('/posts/send-mail-news/{id}',[MailController::class,"sendEmailNews"]);
//.Post Controllers


    //Categoris
    Route::get('/category',[CategoryController::class,"all"]);
    Route::post('/category/save',[CategoryController::class,"save"]);
//    Route::get('/category/edit/{id}',[CategoryController::class,"edit"]);
    Route::post('/category/update/{id}',[CategoryController::class,"update"]);
    Route::get('/category/delete/{id}',[CategoryController::class,"delete"]);
    Route::get('/category/hidden/{id}',[CategoryController::class,"hidden"]);
    Route::get('/category/appear/{id}',[CategoryController::class,"appear"]);

    Route::get('/user',[UserController::class,"user"]);
    Route::post('/user/update/{id}',[UserController::class,"update"]);

    //Contact
    Route::get('/contact',[ContactController::class,"all"]);

});
