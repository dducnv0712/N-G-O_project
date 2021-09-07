<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\ContributeController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\MailNewsLetterController;
use App\Http\Controllers\SocialController;
use App\Http\Controllers\VolunteerController;
use App\Http\Controllers\WebController;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\ProjectController;
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
Route::get('lang/{lang}', ['as' => 'lang.switch', 'uses' => 'App\Http\Controllers\LanguageController@switchLang']);
Route::get('/',[WebController::class,"home"]);
Route::get('/contact',[WebController::class,"contact"]);
Route::post('/contact-submit',[ContactController::class,"submit"]);
Route::get('/details-project/{id}',[WebController::class,"details_project"]);
Route::get('/donate',[WebController::class,"donate"]);
Route::get('/donate/{id}',[WebController::class,"donate_selected"]);
Route::get('/about',[WebController::class,"about"]);
Route::get('/login',[WebController::class,"account"]);
Route::post('/subscribe-mail',[MailNewsLetterController::class,'subMail']);
Route::get('/project/{id}',[WebController::class,"project"]);
Route::get('/project',[WebController::class,"projectAll"]);
Route::get('/gallery',[GalleryController::class,"gallery"]);
Route::get('/profile',[WebController::class,"profile"]);
Route::get('/contributor',[WebController::class,"contributor"]);
Route::post('/contribution',[ContributeController::class,"contribution"]);
Route::get('/become-a-volunteer',[WebController::class,"join_volunteer"]);
Route::get('/volunteer',[WebController::class,"volunteer"]);
Route::post('/register-volunteer',[VolunteerController::class,"register"]);
Route::get('/volunteer-account-register/{id}',[VolunteerController::class,"acc_register"]);
Route::post('/volunteer-account-save/{id}',[VolunteerController::class,"acc_save"]);
Route::get('/volunteer-update-info/{id}',[VolunteerController::class,"update_info"]);





