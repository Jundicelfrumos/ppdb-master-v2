<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\PaymentController;
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
    return view('home');
});

Route::get('/contact-us', function () {
    return view('contact-us');
});

Route::get('/news', function () {
    return view('news');
});

Route::get('/ppdb', function () {
    return view('ppdb');
});

Route::get('/about-us', function () {
    return view('about-us');
});

Route::get('/supercamp', function () {
    return view('supercamp');
});

Route::get('/academy', function () {
    return view('academy');
});

Route::get('/business', function () {
    return view('business');
});

Route::get('/community', function () {
    return view('community');
});

Route::get('/goverment', function () {
    return view('government');
});

Route::get('/academy', function () {
    return view('academy');
});

Route::get('/parent', function () {
    return view('parent');
});


Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'registerPost'])->name('register');

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'loginPost'])->name('login');


// form

Route::get('/form-pendaftaran', [FormController::class, 'formPendaftaran'])->name('form');
Route::post('test-post', [FormController::class, 'formPendaftaranPost'])->name('formPost');

Route::get('provinsi', [SelectedController::class, 'getKota'])->name('provinsi');

Route::get('payment', [PaymentController::class, 'index'])->name('index');
Route::post('paymentPost', [PaymentController::class, 'buktiTranferPost'])->name('paymentPost');

