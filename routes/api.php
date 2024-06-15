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
    
    
    
    Route::post('registerAdmin', [AdminController::class, 'registerAdmin'])->name('registerAdmin');
    Route::post('loginAdmin', [AdminController::class, 'loginAdmin'])->name('loginAdmin');
    Route::get('profileAdmin', [AdminController::class, 'profileAdmin'])->name('profileAdmin');
    Route::post('logoutAdmin', [AdminController::class, 'logoutAdmin'])->name('logoutAdmin');
    Route::post('refreshAdmin', [AdminController::class, 'refreshAdmin'])->name('refreshAdmin');
    
    









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
    Route::post('/payAidas', [UserController::class, 'initialize'])->name('pay');

   
    Route::get('/rave/callback', [UserController::class, 'callback'])->name('callback');


    // send mail for verification
    Route::post('sendMailForVerification', [UserController::class, 'sendMailForVerification'])->name('sendMailForVerification');


    Route::post('verifyingCode', [UserController::class, 'verifyingCode'])->name('verifyingCode');
    

// create chart  with in the respons table
    Route::post('createNewChats', [UserController::class, 'createNewChats'])->name('createNewChats');
    
    // update chat 
        Route::put('updateNewChats', [UserController::class, 'updateNewChats'])->name('updateNewChats');


// route to send prompt 
    Route::post('createPrompts', [UserController::class, 'createPrompts'])->name('createPrompts');

// route to send responses
        Route::post('createResponse', [UserController::class, 'createResponse'])->name('createResponse');

// route to read  user prompts by user id
Route::get('readChat/{id}', [UserController::class, 'readChat'])->name('readChat');

// route to read responses  by prompt id
Route::get('requestAndResponses/{id}', [UserController::class, 'requestAndResponses'])->name('requestAndResponses');


// route to 
    Route::post('aiApi', [UserController::class, 'aiApi'])->name('aiApi');

});
