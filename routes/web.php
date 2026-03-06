<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::view("/", "welcome");
Route::view("fed", "fed");
/* Route::get('/', function () {
    return view('welcome');
});

Route::get("/fed",function (){
    return view("fed");
});
Route::get("/x/{d}",function($d){
    return "hello {$d}";
});

Route::post("/ok",function(){
    return view("ok");
}); */

/* Route::prefix("/user")->group(function () {
    Route::get("/", [UserController::class, "index"]);
    Route::get("/edit", [UserController::class, "edit"]);
}); */

Route::controller(UserController::class)->prefix("user")->group(function(){
    Route::get("/","index");
    Route::get("/edit","edit");
});