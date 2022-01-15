<?php

use App\Http\Controllers\InventoryController;
use App\Http\Controllers\RepairController;
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
    return view('index');
});

Route::get('/repair/form', [RepairController::class, 'index'])->name('form');
Route::get('/inventory/list', [InventoryController::class, 'index'])->name('inventory');