<?php


use App\Http\Controllers\WebController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
Route::middleware(["auth","admin"])->group(function (){
    Route::get('/',[WebController::class,"admin"]);
    Route::get('/contributor',[WebController::class,"Contributor"]);
    Route::get('/digital-wallet',[WebController::class, "Digital_wallet"]);
    Route::get('/credit-cart',[WebController::class,"Credit_cart"]);
    Route::get('/add',[WebController::class,"add"]);
    Route::get('/list',[WebController::class,"list"]);
    Route::get('/update',[WebController::class,"update"]);

    //Categoris
    Route::get('/category',[CategoryController::class,"all"]);
    Route::post('/category/save',[CategoryController::class,"save"]);
//    Route::get('/category/edit/{id}',[CategoryController::class,"edit"]);
    Route::post('/category/update/{id}',[CategoryController::class,"update"]);
    Route::get('/category/delete/{id}',[CategoryController::class,"delete"]);

    Route::get('/user',[UserController::class,"user"]);
    Route::post('/user/update/{id}',[UserController::class,"update"]);
});
