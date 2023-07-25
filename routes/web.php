<?php

use App\Http\Controllers\DownloadCVController;
use App\Http\Controllers\SendEmailController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('download/{locate}', DownloadCVController::class)->name('download');
Route::post('contact',SendEmailController::class)->name('contact');


Route::get('/', function () {
    return view('page');
});


