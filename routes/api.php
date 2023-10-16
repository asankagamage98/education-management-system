<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\http\Controllers\AuthController;
use App\http\Controllers\StudentController;
use App\http\Controllers\TeacherController;


//public route
Route::post('/register', [AuthController::class,'register']);
Route::post('/login', [AuthController::class,'login']);


Route::group(['middleware' => ['auth:sanctum']],function() {

    Route::post('/logout',[AuthController::class,'logout']);

    //student
    Route::post('/student',[StudentController::class,'store']);
    Route::put('/student/{id}',[StudentController::class,'update']);
    Route::get('/student',[StudentController::class,'getall']);
    Route::get('/student/{id}',[StudentController::class,'getById']);
    Route::delete('/student/{id}',[StudentController::class,'delete']);
    Route::get('/student/search/{name}',[StudentController::class,'search']);


    // //teacher
    Route::post('/teacher',[TeacherController::class,'store']);
    Route::put('/teacher/{id}'[TeacherController::class],'update');
    Route::get('/teacher',[TeacherController::class,'all']);
    Route::get('/teacher/search/{name}',[TeacherController::class,'search']);
    Route::get('/teacher/{id}',[TeacherController::class],'getById');
   
});
