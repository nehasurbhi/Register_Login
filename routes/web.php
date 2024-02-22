<?php

use App\Http\Controllers\DomPdfController;
use Illuminate\Support\Facades\Request;
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

Route::get('/dashboard', function () {
    
    return view('welcome');
});
Route::get('/signup', function () {
    return view('signup');
});

Route::get('/sign', function () {
    return view('sign');
});

Route::get('/get-pdf', [DomPdfController::class, 'getpdf']);



