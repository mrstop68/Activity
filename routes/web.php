<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ActivityController;
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
Route::get('/activity', [ActivityController::class , 'index'])->name('activity.index');
Route::get('/activity/create', [ActivityController::class , 'create'])->name('activity.create');
Route::post('/activity', [ActivityController::class , 'store'])->name('activity.store');
Route::delete('/activity/delete/{id}', [ActivityController::class , 'destroy'])->name('activity.destroy');


Route::get('/', function () {
    return view('welcome');
});
