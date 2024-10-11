<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleipsController;

// CRUD A EMPLEADO
Route::resource('empleips', EmpleipsController::class);



// Route::get('/empleips/index',[empleipsController::class,'index'])->name('empleips.index');

// Route::get('/empleadoips/create',[empleipsController::class,'create']);
// Route::post('/empleadoips/store',[empleadoipsController::class,'store'])->name('empleadoips.store');

// Route::get('/empleadoips/{empleadoips}/edit',[empleadoipsController::class,'edit'])->name('empleadoips.edit');
// Route::put('/empleadoips/{empleadoips}', [empleadoipsController::class, 'update'])->name('empleadoips.update');

// Route::delete('empleadoips/{empleadoips}',[empleadoipsController::class,'destroy'])->name('empleadoips.destroy');
