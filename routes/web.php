<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CampaignController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\Admin\ShowController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;

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
    return view('welcome');
});

Route::get('/campaign', [CampaignController::class, 'index'])->name('campaign');
Route::post('/campaign', [CampaignController::class, 'store']);

Route::get('/report', [ReportController::class, 'index'])
    ->name('report')
    ->middleware('auth');
Route::get('delete/{id}', [ReportController::class, 'delete']);
Route::get('edit/{id}', [ReportController::class, 'show']);
Route::post('/edit', [ReportController::class, 'update']); 


Route::get('/show', [ShowController::class, 'index'])
    ->name('show')
    ->middleware('auth');
Route::get('delete/{id}', [ShowController::class, 'delete']);
Route::get('edit/{id}', [ShowController::class, 'show']);
Route::post('/edit', [ShowController::class, 'update']);


Route::get('/payment', [PaymentController::class, 'index'])->name('payment');

Route::get('/status', function () {
    return view('status');
});

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);

Route::post('/logout', [LogoutController::class, 'store'])->name('logout');