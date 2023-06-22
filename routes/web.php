<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobsController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [JobsController::class, 'home']);
Route::get('api/types', [JobsController::class, 'types']);
Route::get('api/departments', [JobsController::class, 'departments']);
Route::get('api/offices', [JobsController::class, 'offices']);
Route::get('api/jobs', [JobsController::class, 'jobs']);