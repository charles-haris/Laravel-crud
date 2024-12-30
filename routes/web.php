

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
//ceci est un commentaire
//this is a comment
//es la commenta
Route::get('/', function () {
    return view('/student');
});
Route::post("/student/store", [StudentController::class,'store'])->name('store');
Route::get("/student", [StudentController::class,'index'])->name('index');
Route::get("/student/create", [StudentController::class, 'create']);
Route::get("/student/{id}", [StudentController::class, 'show']);
Route::get("/student/{id}/edit", [StudentController::class, 'edit']);
Route::post("/student/update/{id}", [StudentController::class,'update' ]);





