<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::post('contact',function(){
    request()->validate([
        'name' => 'required',
        'email' => 'required',
        'subject' => 'required',
        'message' => 'required'
    ]);

    $headers = 'From: ' . request()->name . ' - ' . request()->email  . "\r\n";

    mail('damianladiani@gmail.com','Message from contact form',request()->message, $headers);
    return back()->with('success','Message sent successfully');
})->name('contact');
