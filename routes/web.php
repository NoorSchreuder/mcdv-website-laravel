<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;


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
    return view('index');
});

Route::get('/appartement', function () {
    return view('appartement');
});

Route::get('/badkamer', function () {
    return view('badkamer');
});

Route::get('/buiten', function () {
    return view('buiten');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/fotos', function () {
    return view('fotos');
});

Route::get('/meer-informatie', function () {
    return view('meer-informatie');
});

Route::get('/over-ons', function () {
    return view('over-ons');
});

Route::get('/routebeschrijving', function () {
    return view('routebeschrijving');
});

Route::get('/slaapkamer', function () {
    return view('slaapkamer');
});

Route::get('/wat-te-doen', function () {
    return view('wat-te-doen');
});

Route::get('/woonkamer', function () {
    return view('woonkamer');
});

Route::get('/contact', [ContactController::class, 'showForm']);
Route::post('/contact', [ContactController::class, 'submitForm']);
