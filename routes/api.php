<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\project;
use App\Models\classDiagram2;
use App\Http\Controllers\Apicontroller;
use App\Http\Controllers\Apicontroller2;
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
Route::post('/classDiagram',[Apicontroller::class,'AddStudent']);
Route::put('/update/{id}',[Apicontroller::class,'UpdateStudent']);
Route::delete('/delete/{id}',[Apicontroller::class,'delete']);
Route::post('/classDiagram2',[Apicontroller2::class,'AddStudent']);
Route::get('/find/{id}',[Apicontroller::class,'getByID']);