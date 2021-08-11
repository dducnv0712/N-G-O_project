<?php

use App\Http\Controllers\SocialController;
use App\Http\Controllers\WebController;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/',[WebController::class,"home"]);
Route::get('/donate',[WebController::class,"donate"]);
Route::get('/about',[WebController::class,"about"]);
Route::get('/account',[WebController::class,"account"]);
Route::get('auth/social', [SocialController::class,'show'])->name('social.login');
Route::get('auth/{driver}', [SocialController::class,'redirectToProvider'])->name('social.auth');
Route::get('auth/{driver}/callback', [SocialController::class,'handleProviderCallback'])->name('social.callback');



Route::get('/contributor',[WebController::class,"Contributor"]);
Route::get('/digital-wallet',[WebController::class, "Digital_wallet"]);
Route::get('/credit-cart',[WebController::class,"Credit_cart"]);
Route::get('/add',[WebController::class,"add"]);
Route::get('/list',[WebController::class,"list"]);
Route::get('/update',[WebController::class,"update"]);


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');


Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
    return redirect('/');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();
    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');
