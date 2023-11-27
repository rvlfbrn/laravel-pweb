<?php

use App\Http\Controllers\DataController;
use App\Http\Controllers\MainController;
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

Route::get("/", [MainController::class, "index"])->name("home");

Route::get("register", [DataController::class, "create"])->name("data.create");
Route::post("register", [DataController::class, "store"])->name("data.store");
