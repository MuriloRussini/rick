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

Route::group([
    'prefix' => 'ingredients',
    'as' => 'ingredients.'
], function () {
    Route::get('/', [\App\Http\Controllers\Admin\IngredientController::class, 'index'])->name('index');
    Route::get('/', [\App\Http\Controllers\Admin\IngredientController::class, 'create'])->name('create');
    Route::post('/', [\App\Http\Controllers\Admin\IngredientController::class, 'store'])->name('store');
    // return view('pages/home');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
