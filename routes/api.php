<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\http\Controllers\AuthController;
use App\http\Controllers\StudentController;
use App\http\Controllers\NewTeachersController;
use App\http\Controllers\EmployeeController;
use App\http\controllers\EventController;


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
    Route::post('/teacher', [NewTeachersController::class,'store']);
    Route::put('/teacher/{id}', [NewTeachersController::class,'update']);
    Route::get('/teacher', [NewTeachersController::class,'getall']);
    Route::get('/teacher/search/{name}', [NewTeachersController::class,'search']);
    Route::get('/teacher/{id}', [NewTeachersController::class,'getById']);
    Route::delete('/teacher/{id}',[NewTeachersController::class,'delete']);


    //non emplyee mgt
    Route::post('/employee',[EmployeeController::class,'store']);
    Route::put('/employee/{id}',[EmployeeController::class,'update']);
    Route::get('/employee',[EmployeeController::class,'getall']);
    Route::get('/employee/{id}',[EmployeeController::class,'getById']);
    Route::get('/employee/search/{name}',[EmployeeController::class,'search']);
    Route::delete('/employee/{id}',[EmployeeController::class,'delete']);

    //eventMgt
    Route::post('/event',[EventController::class,'store']);
    Route::put('/event/{id}',[EventController::class,'update']);
    Route::get('/event',[EventController::class,'getall']);
    Route::get('/event/{id}',[EventController::class,'getById']);
    Route::get('/event/search/{name}',[EventController::class,'search']);
    Route::delete('/event/{id}',[EventController::class,'delete']);
    
   
});
