<?php


use App\Http\Controllers\WebController;
use Illuminate\Support\Facades\Route;
Route::middleware(["auth","admin"])->group(function (){
    Route::get('/',[WebController::class,"admin"]);
    Route::get('/contributor',[WebController::class,"Contributor"]);
    Route::get('/digital-wallet',[WebController::class, "Digital_wallet"]);
    Route::get('/credit-cart',[WebController::class,"Credit_cart"]);
    Route::get('/add',[WebController::class,"add"]);
    Route::get('/list',[WebController::class,"list"]);
    Route::get('/update',[WebController::class,"update"]);

});
