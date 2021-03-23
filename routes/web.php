<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\TempFormController;
use App\Http\Controllers\PreviewController;


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


Route::group(['middleware' => ['XssSanitizer']], function () {
Route::post('/preview', [TempFormController::class, 'store'])->name('tempstore');
});

Route::get('/preview/{id}', [PreviewController::class, 'index'])->name('preview');
Route::get('/submit', [PreviewController::class, 'show'])->name('thankyou');
Route::get('/submit/{id}', [PreviewController::class, 'store'])->name('finalsubmit');


Route::get('/', [FormController::class, 'index'])->name('home');
Route::get('/{id}', [FormController::class, 'show'])->name('prefilledhome');








