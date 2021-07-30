<?php

use App\Http\Controllers\DoctorController;
use App\Http\Controllers\pagesController;
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


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

//Route::get('/add-doctor', 'DoctorController@add-doctor');
//Route::get('/Doctor', 'DoctorController@index');
//Route::resource('Doctor','DoctorController');
//Route::get('/doctor',[\App\Http\Controllers\pagesController::class,'doctor']);
Route::get('/logout', [pagesController::class,'logout']);
Route::get('/index', [DoctorController::class,'index']);

