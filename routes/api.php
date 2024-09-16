<?php

use App\Http\Controllers\ZoneController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {

    return $request->user();
})->middleware('auth:sanctum');

Route::get('zones', [ZoneController::class, 'index']);
Route::get('zones/{zone}', [ZoneController::class, 'show']);
