<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PesertaController;
use App\Models\Peserta;
use App\Models\User;
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
Route::get('/', function () {
    return view('index');
});

// Route::get('/home', function () {
//     return view('layouts/home', [
//     "pesertas" => Peserta::all()
//     ]);
// })->middleware(['auth']);

Route::get('/user/{nama}', function ($name) {
    return 'Halo' . $name;
});

Route::get('/register', function () {
    return view('register');
})->name("register");

Route::post('/action-register',
[AuthController::class , 'actionRegister']);


Route::get('/login', [AuthController::class,
'loginView'])->name("login");

Route::post('/action-login',
[AuthController::class , 'actionLogin']);

Route::get('/logout',
[AuthController::class , 'logout']);

Route::get('/clases', function () {
    return view('course');
});

Route::get('/tutors', function () {
    return view('tutors');
});


Route::get('/peserta', [PesertaController::class, 'index'])->name('peserta.index')->middleware(['auth']);

Route::get('/peserta/create', [PesertaController::class, 'create'])->name('peserta.create');
Route::get('/peserta/form', [PesertaController::class, 'form'])->name('peserta.form');

Route::post('/peserta/store', [PesertaController::class, 'store'])->name('peserta.store')->middleware('auth');
Route::post('/peserta/store1', [PesertaController::class, 'store1'])->name('peserta.store1')->middleware('auth');

Route::get('/peserta/show/{id}', [PesertaController::class, 'show'])->name('peserta.show');

Route::get('/peserta/{id}/edit', [PesertaController::class, 'edit'])->name('peserta.edit')->middleware('auth');

Route::put('/peserta/{id}', [PesertaController::class, 'update'])->name('peserta.update')->middleware('auth');

Route::delete('/peserta/{id}', [PesertaController::class, 'destroy'])->name('peserta.delete')->middleware('auth');
