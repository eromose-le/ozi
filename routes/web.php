<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CampaignController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\SuperAdminController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\UploadImageController;

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

// ADMIN ROUTES ____________________________________________________________
Auth::routes();
Route::group(['middleware' => ['auth' => 'admin']], function () {
    Route::get('/admin', [AdminController::class, 'index'])
    ->name('show')
    ->middleware('auth');
    Route::get('delete/{id}', [AdminController::class, 'delete']);
    Route::get('edit/{id}', [AdminController::class, 'show']);
    Route::post('/edit', [AdminController::class, 'update']);
});

// SUPER ADMIN ROUTES ____________________________________________________________
Auth::routes();
Route::group(['middleware' => ['auth' => 'superadmin']], function () {
    Route::get('/root', [SuperAdminController::class, 'index'])->name('supershow')
    ->middleware('auth');
    Route::get('delete/{id}', [SuperAdminController::class, 'delete']);
    Route::get('edit/{id}', [SuperAdminController::class, 'show']);
    Route::post('/edit', [SuperAdminController::class, 'update']);
});

Route::get('/report', [ReportController::class, 'index'])
    ->name('report')
    ->middleware('auth');
// Route::get('/download/{id}', [ReportController::class, 'downloadfunc']);
// Route::get('delete/{id}', [ReportController::class, 'delete']);
// Route::get('edit/{id}', [ReportController::class, 'show']);
// Route::post('/edit', [ReportController::class, 'update']); 


// NORMAL ROUTE ____________________________________________________________
Route::get('/', function () {
    return view('welcome');
});


// APP ROUTES ______________________________________________________________
Route::get('/campaign', [CampaignController::class, 'index'])->name('campaign');
Route::post('/campaign', [CampaignController::class, 'store']);


Route::get('upload-image', [UploadImageController::class, 'index']);
Route::post('save', [UploadImageController::class, 'save']);

Route::get('/payment', [PaymentController::class, 'index'])->name('payment');

Route::get('/status', function () {
    return view('status');
});


// AUTH ROUTES ______________________________________________________________
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);

Route::post('/logout', [LogoutController::class, 'store'])->name('logout');

