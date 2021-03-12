<?php

// use App\Http\Controllers\WorkApplicationForm;
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
// Route::resource('photos', PhotoController::class);

