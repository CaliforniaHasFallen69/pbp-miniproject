<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginUserController;
use App\Http\Controllers\DashboardPetugasController;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\UpdateLokerController;
use App\Http\Controllers\UpdatePencakerController;


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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::middleware(['guest'])->group(function(){
Route::get('/', [LoginUserController::class, 'index']);
Route::post('/', [LoginUserController::class, 'authenticate']);
});

// Route::middleware(['auth'])->group(function(){
    Route::get('/dashboardpetugas', [DashboardPetugasController::class, 'index']);
    Route::get('/detail/{idloker}', [ViewController::class, 'index']);
    Route::get('/edit/{id}', [UpdateLokerController::class, 'edit']);
    Route::put('/edit/{id}', [UpdateLokerController::class, 'update']);
    Route::get('/updatepencaker', [UpdatePencakerController::class, 'index']);
// });


