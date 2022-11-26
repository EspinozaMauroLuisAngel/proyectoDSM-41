<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\adminuserController;
use App\Http\Controllers\userController;
use App\Http\Controllers\noteController;
use App\Http\Controllers\listnoteController;
use App\Http\Controllers\imagenoteController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::Apiresource('adminusers',adminuserController::class);
Route::Apiresource('user',userController::class);
Route::Apiresource('note',noteController::class);
Route::Apiresource('listnote',listnoteController::class);
Route::Apiresource('imagenote',imagenoteController::class);
