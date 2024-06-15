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
    'prefix' => 'aidas'


], function ($router) {

    

    Route::post('registerUser', [UserController::class, 'registerUser'])->name('registerUser');
    Route::post('loginUser', [UserController::class, 'loginUser'])->name('loginUser');
    Route::get('profileUser', [UserController::class, 'profileUser'])->name('profileUser');
    Route::post('logoutUser', [UserController::class, 'logoutUser'])->name('logoutUser');
    Route::post('refreshUser', [UserController::class, 'refreshUser'])->name('refreshUser');


    Route::get('usersshow', [UserController::class, 'usersshow']);
    Route::get('usersshow/{id}', [UserController::class, 'usersshowId']);
    Route::put('/updating/{id}', [UserController::class, 'updating']);

    Route::delete('usersdelete/{id}', [UserController::class, 'userdelete']);


    // route payment
    Route::get('/pay', [UserController::class, 'initialize'])->name('pay');

    Route::get('/rave/callback', [UserController::class, 'callback'])->name('callback');


    // send mail for verification
    // Route::post('sendMailForVerification', [UserController::class, 'sendMailForVerification'])->name('sendMailForVerification');




});
//   773406225
