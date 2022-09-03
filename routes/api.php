<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserrController;
use App\Http\Controllers\ConsultationController;
use App\Http\Controllers\SpotController;
use App\Http\Controllers\VaccinationController;

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

Route::prefix('/v1')->group(function(){
    Route::prefix('/auth')->group(function(){
        Route::post('/login', [UserrController::class,'login']);
        Route::post('/logout', [UserrController::class,'logout']);
    });

    Route::post('/consultations', [ConsultationController::class,'store']);
    Route::get('/consultations', [ConsultationController::class,'index']);

    Route::get('/spots/{id}', [SpotController::class,'show']);
    Route::get('/spots', [SpotController::class,'index']);

    Route::post('/vaccinations', [VaccinationController::class,'store']);
    Route::get('/vaccinations', [VaccinationController::class,'index']);

    // Route::post('/auth/login', function (){
    //     return 'asd';
    // });
});


