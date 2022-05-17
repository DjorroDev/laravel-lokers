<?php

use App\Http\Controllers\DashboardListingController;
use App\Http\Controllers\ListingController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
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
    return view('welcome');
});

Route::get('/jobs', [ListingController::class, 'index']);
Route::get('/jobs/{listing}', [ListingController::class, 'show']);

Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/profile');

Route::get('/register', [RegisterController::class, 'index']);
Route::get('/register/seeker', [RegisterController::class, 'seeker']);
Route::post('/register/seeker', [RegisterController::class, 'storeSeeker']);

Route::get('/register/company', [RegisterController::class, 'recruiter']);
Route::post('/register/company', [RegisterController::class, 'storeRecruiter']);

Route::get('/dashboard', function () {
    return view('dashboard.index');
});

Route::resource('/dashboard/lists', DashboardListingController::class);
