<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Controllers\projectsController;

Route::prefix("/Projects")->group(function(){
Route::get("/",[projectsController::class,"getProjects"]);
Route::get("/{id}",[projectsController::class,"getProject"]);
Route::post("/",[projectsController::class,"createProject"]);
Route::put("/{id}",[projectsController::class,"updateProject"]);
Route::delete("/{id}",[projectsController::class,"deleteProject"]);
});

