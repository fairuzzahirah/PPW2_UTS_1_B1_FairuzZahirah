<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Models\pemain;

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

Route::get('/pemain', [pemainController::class,'index']);

