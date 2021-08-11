<?php


use App\Http\Controllers\WebController;
use Illuminate\Support\Facades\Route;
Route::middleware(["auth","admin"])->group(function (){//phải đăng nhập mới cho vào trang

    Route::get('/',[WebController::class,"admin"]);


});
