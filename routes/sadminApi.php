<?php

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use Illuminate\Validation\ValidationException;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group([

    'middleware' => 'api',
    'prefix' => 'auth'


], function ($router) {



//  backend api
Route::post('Adminregister', [AdminController::class, 'Adminregister'])->name('Adminregister');
Route::post('adminlogin', [AdminController::class, 'adminlogin'])->name('adminlogin');
Route::get('profileAdmin', [AdminController::class, 'profileAdmin'])->name('profileAdmin');
Route::post('logoutAdmin', [AdminController::class, 'logoutAdmin'])->name('logoutAdmin');
Route::post('refreshAdmin', [AdminController::class, 'refreshAdmin'])->name('refreshAdmin');

// get single user
Route::get('getSingleUser/{id}', [AdminController::class, 'getSingleUser'])->name('getSingleUser');
// get all users
Route::get('getAllUser', [AdminController::class, 'getAllUser'])->name('getAllUser');


    });

