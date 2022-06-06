<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\DashboardController;

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
    return view('home');
});

Route::get('login', [AuthController::class, 'index']);
Route::get('registers', [AuthController::class, 'register']);
Route::resource('/students', StudentController::class);
/*
|--------------------------------------------------------------------------
| Guest Routes
|--------------------------------------------------------------------------
*/
Route::group(['middleware' => ['guest']], function(){
    Route::post('/loginpost', [AuthController::class, 'Authenticate']);
    Route::post('registerpost', [AuthController::class, 'store']);
    
});
/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/
Route::group(['middleware' => ['auth', 'CheckRole:admin']], function(){
    Route::resource('/dashboard', DashboardController::class);
    Route::get('/logout', [AuthController::class, 'logout']);
});