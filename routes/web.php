<?php

// use App\Http\Controllers\WorkApplicationForm;

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\DataColl\CandidateController;
use App\Http\Controllers\DataColl\EducationController;
use App\Http\Controllers\DataColl\EmployestatusController;
use App\Http\Controllers\DataColl\LanguageContoller;
use App\Http\Controllers\DataColl\PositionController;
use App\Http\Controllers\DataColl\ProficiencieslevelContoller;
use App\Http\Controllers\WorkapplicationformController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::resource('/workapplicationform', WorkApplicationForm::class);
// Route::resource('/', WorkApplicationForm::class);
Route::resource('/',WorkapplicationformController::class);
Route::resource('education',EducationController::class);
Route::resource('proficiencieslevel',ProficiencieslevelContoller::class);
Route::resource('language',LanguageContoller::class);
Route::resource('employestatus',EmployestatusController::class);

//admin
Route::resource('login',AuthController::class);
Route::resource('dashboard',DashboardController::class);
Route::resource('position',PositionController::class);
Route::resource('candidate',CandidateController::class);

