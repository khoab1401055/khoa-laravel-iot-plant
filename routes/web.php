<?php

use App\Http\Controllers\HomeController;
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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('menu.visibility');



Route::middleware(['auth'])->group(function () {
    Route::prefix('devices')->group(function () {
        Route::get('devices-list', [LivewireRoutesController::class,'devicesList'])->name('devices.list')->middleware('menu.visibility');
        Route::get('devices-add', [LivewireRoutesController::class,'devicesAdd'])->name('devices.add')->middleware('menu.visibility');
    });
    Route::prefix('farms')->group(function () {
        Route::get('farms-list', [LivewireRoutesController::class,'farmsList'])->name('farms.list')->middleware('menu.visibility');
        Route::get('farm-add', [LivewireRoutesController::class,'farmAdd'])->name('farm.add')->middleware('menu.visibility');
        Route::get('detail/{name}', [LivewireRoutesController::class,'goToFarm'])->name('goto.farm');
    });
});
Route::post('change-language/{locale}', [HomeController::class, 'changeLanguage'])
    ->name('change.language');
