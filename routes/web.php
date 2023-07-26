<?php

use App\Http\Controllers\LivewireRoutesController;
use App\Http\Livewire\DevicesLivewire;
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
    return redirect()->route('home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::middleware(['auth'])->group(function () {
    Route::prefix('devices')->group(function () {
        Route::get('devices-list', [LivewireRoutesController::class,'devicesList'])->name('devices.list');
        Route::get('devices-add', [LivewireRoutesController::class,'devicesAdd'])->name('devices.add');
    });
    Route::prefix('farms')->group(function () {
        Route::get('farms-list', [LivewireRoutesController::class,'farmsList'])->name('farms.list');
        Route::get('farm-add', [LivewireRoutesController::class,'farmAdd'])->name('farm.add');
    });
});
