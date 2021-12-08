<?php

use App\Models\User;
use GuzzleHttp\Psr7\Request;
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
Route::get('/', [App\Http\Controllers\ProfileController::class, 'index'])->name('index');
Route::post('/edit/{id}', [App\Http\Controllers\ProfileController::class, 'update'])->name('edit');
Route::get('/edit-data/{id}', function ($id) {
    return view('editProfile', compact('id'));
});
Route::get('/store-data', function () {
    return view('addProfile');
});
Route::post('/delete', [App\Http\Controllers\ProfileController::class, 'delete'])->name('delete');
Route::post('/store', [App\Http\Controllers\ProfileController::class, 'store'])->name('store');
