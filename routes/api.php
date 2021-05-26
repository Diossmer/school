<?php

use App\Http\Controllers\API\MateriaController;
use App\Http\Controllers\AutenticarController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

/* Route::get('materia',[MateriaController::class,'index']);
Route::post('materia',[MateriaController::class,'store']);
Route::get('materia/{materia}',[MateriaController::class,'show']);
Route::put('materia/{materia}',[MateriaController::class,'update']);
Route::delete('materia/{materia}',[MateriaController::class,'destroy']); */

Route::apiResource('materia',MateriaController::class);

Route::post('registros',[AutenticarController::class,'registros']);
Route::post('login',[AutenticarController::class,'accesologin']);