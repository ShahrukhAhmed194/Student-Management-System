<?php
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;



// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[StudentController::class,'index']);
Route::get('/edit/{id}',[StudentController::class,'edit']);
Route::get('/show/{id}',[StudentController::class,'show']);
Route::get('/create',[StudentController::class,'create']);
Route::post('/store',[StudentController::class,'store']);
Route::post('/update/{id}',[StudentController::class,'update']);
