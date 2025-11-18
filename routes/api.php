<?php

use App\Http\Controllers\CityController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/token', function () {
    $user = User::find(1);
    if (!$user) {
        return response()->json(['message' => 'User not found'], 404);
    }

    $token = $user->createToken('api-token')->plainTextToken;

    return response()->json(['token' => $token]);
});


Route::middleware('auth:sanctum')->group(function () {

    Route::apiResource('cities', CityController::class);
});
