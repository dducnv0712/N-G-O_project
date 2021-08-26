<?php

use App\Http\Controllers\ContributeController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\SocialController;
use App\Http\Controllers\TranslateController;
use App\Http\Controllers\WebController;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\PostController;
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
//Route::middleware(['auth:sanctum', 'verified'])->get('/',[WebController::class,"home"]);

Route::get('/',[WebController::class,"home"]);
Route::get('/contact',[WebController::class,"contact"]);
Route::get('/desc-post/{id}',[WebController::class,"desc_post"]);

Route::get('/donate',[WebController::class,"donate"]);
Route::get('/donate/{id}',[WebController::class,"donate_selected"]);
Route::get('/about',[WebController::class,"about"]);
Route::get('/login',[WebController::class,"account"]);
Route::get('auth/social', [SocialController::class,'show'])->name('social.login');
Route::get('auth/{driver}', [SocialController::class,'redirectToProvider'])->name('social.auth');
Route::get('auth/{driver}/callback', [SocialController::class,'handleProviderCallback'])->name('social.callback');
Route::post('/subscribe-mail',[MailController::class,'subMail']);
Route::get('/causes/{id}',[WebController::class,"causes"]);
Route::get('/causes',[WebController::class,"causesAll"]);
Route::get('/gallery',[WebController::class,"gallery"]);
Route::get('/profile',[WebController::class,"profile"]);
Route::post('/contribution',[ContributeController::class,"contribution"]);

Route::get('/become-a-volunteer',[WebController::class,"join_volunteer"]);
Route::get('/volunteer',[WebController::class,"volunteer"]);





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
