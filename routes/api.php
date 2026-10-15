<?php

use App\Http\Controllers\AddressController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MedicalFileController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');








Route::prefix('products')->group(function(){

    Route::get('/{id}',[ProductController::class,'show']);

    Route::post('/',[ProductController::class,'store']);

});




Route::prefix('categories')->group(function(){


    Route::get('/{id}',[CategoryController::class,'show']);

    Route::post('/',[CategoryController::class,'store']);

    Route::delete('/{id}',[CategoryController::class,'destroy']);




});




Route::post('students',[StudentController::class,'store']);

Route::get('students',[StudentController::class,'index']);

Route::post('medicalFile',[MedicalFileController::class,'store']);

Route::get('students/{id}',[StudentController::class,'show']);

Route::get('/students/medicalFile/{id}',[MedicalFileController::class,'show']);

Route::put('medicalFile/{id}',[MedicalFileController::class,'update']);
