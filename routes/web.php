<?php

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

Route::get('/',function () {
    return view('index');
})->name('index');

Route::prefix('agency')->group(function () {
    Route::get('list',[\App\Http\Controllers\AgencyController::class,'index'])->name('agency.list');
    Route::get('show/{id}',[\App\Http\Controllers\AgencyController::class,'show'])->name('agency.show');
    Route::get('show/{id}/products',[\App\Http\Controllers\AgencyController::class,'products'])->name('agency.products');
    Route::get('show/{id}/agents',[\App\Http\Controllers\AgencyController::class,'agents'])->name('agency.agents');
});

Route::prefix('agent')->group(function () {
    Route::get('list',[\App\Http\Controllers\AgentController::class,'index'])->name('agent.list');
    Route::get('show/{id}',[\App\Http\Controllers\AgentController::class,'show'])->name('agent.show');
    Route::get('show/{id}/products',[\App\Http\Controllers\AgencyController::class,'products'])->name('agent.products');
});

Route::prefix('product')->group(function () {
    Route::get('filter',[\App\Http\Controllers\ProductController::class,'filter'])->name('product.filter');
    Route::get('index',[\App\Http\Controllers\ProductController::class,'index'])->name('product.index');
    Route::get('show/{id}',[\App\Http\Controllers\ProductController::class,'show'])->name('product.show');
});

Route::get('/about',[\App\Http\Controllers\PageController::class,'about'])->name('about');
Route::get('/contact',[\App\Http\Controllers\PageController::class,'contact'])->name('contact');




Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('get-cities/{country}',[\App\Http\Controllers\LocationController::class,'getCities']);
Route::get('get-towns/{city}',[\App\Http\Controllers\LocationController::class,'getTowns']);
