<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
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

Route::get('/', [FormController::class, 'index'])->name('home');

Route::group(['middleware' => ['XssSanitizer']], function () {
Route::post('/preview', [FormController::class, 'store'])->name('store');
});

Route::get('/preview/{id}', [PreviewController::class, 'index'])->name('preview');



