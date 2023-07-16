<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminFormController;
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
Route::get('/contact-us', function () {
    return view('contact-us');
});

// Route::get('/admin-news', function () {
//     return view('admin.manajemen-news');
// });

Route::get('/edit-news', function () {
    return view('admin.edit-news');
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

Route::get('/atph', function () {
    return view('major\atph');
});

Route::get('/rpl', function () {
    return view('major\rpl');
});

Route::get('/kgsp', function () {
    return view('major\kgsp');
});


Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'registerPost'])->name('register');

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'loginPost'])->name('login');

route::get('/register-admin', [AdminController::class, 'register'])->name('register-admin');
route::post('/register-admin', [AdminController::class, 'postregister'])->name('register-admin');
route::get('/login-admin', [AdminController::class, 'login'])->name('login-admin');
route::post('/login-admin', [AdminController::class, 'postlogin'])->name('login-admin');

// news
Route::get('/', [NewsController::class, 'indexHome'])->name('news');
Route::get('/news', [NewsController::class, 'indexView'])->name('news');
Route::get('/detail-news/{id}', [NewsController::class, 'show'])->name('berita');
Route::get('/admin-news', [NewsController::class, 'index'])->name('manajemen-news');
Route::get('/create-news', [NewsController::class, 'create'])->name('create-news');
Route::post('/simpan-news', [NewsController::class, 'store'])->name('simpan-news');
Route::get('/edit-news/{id}', [NewsController::class, 'edit'])->name('edit-news');
Route::post('/update-news/{id}', [NewsController::class, 'update'])->name('update-news');
Route::get('/delete-news/{id}', [NewsController::class, 'destroy'])->name('delete-news');

// form
Route::get('/form-admin', [AdminFormController::class, 'adminformPendaftaran'])->name('form');
Route::post('test-post', [AdminFormController::class, 'adminformPendaftaranPost'])->name('formPost');

Route::get('/form-pendaftaran', [FormController::class, 'formPendaftaran'])->name('form');
Route::post('test-post', [FormController::class, 'formPendaftaranPost'])->name('formPost');

Route::get('provinsi', [SelectedController::class, 'getKota'])->name('provinsi');

Route::get('payment', [PaymentController::class, 'index'])->name('index');
Route::post('paymentPost', [PaymentController::class, 'buktiTranferPost'])->name('paymentPost');

// Route::group(['middleware' => ['auth']], function () {
// });
