<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('brands')->group(function () {
    Route::get('/', [App\Http\Controllers\BrandsController::class, 'index'])->name('index');
    Route::get('/brand/{id}', [App\Http\Controllers\BrandsController::class, 'show'])->name('show');
    Route::post('/brand', [App\Http\Controllers\BrandsController::class, 'store'])->name('store');
    Route::put('/brand/{id}', [App\Http\Controllers\BrandsController::class, 'update'])->name('update');
    Route::delete('/brand/{id}', [App\Http\Controllers\BrandsController::class, 'delete'])->name('delete');
});