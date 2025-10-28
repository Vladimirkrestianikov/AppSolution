<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FileUploadController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/Main', function () {
    return view('Main');
})->middleware(['auth', 'verified'])->name('Main');

//Все сылки на страницы

//1
Route::get('/AppSolution', function () {
    return view('Pages.AppSolution');
})->middleware(['auth', 'verified'])->name('AppSolution');

//2
Route::get('/Projects', function () {
    return view('Pages.Projects');
})->middleware(['auth', 'verified'])->name('Projects');

//3

Route::get('/About', function () {
    return view('Pages.About');
})->middleware(['auth', 'verified'])->name('About');

//4
Route::get('/Downloads', function () {
    return view('Pages.Downloads');
})->middleware(['auth', 'verified'])->name('Downloads');



//конец сылок на страницы

//    Route::get('/Myfile', function () {
//        return view('Pages.upload-section');
//    })->middleware(['auth', 'verified'])->name('u');
//
//
//
//
//Route::middleware(['auth'])->group(function () {
//    Route::get('/files', [FileUploadController::class, 'index'])->name('files.index');
//    Route::post('/files', [FileUploadController::class, 'store'])->name('files.store');
//    Route::delete('/files/{file}', [FileUploadController::class, 'destroy'])->name('files.destroy');
//});




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
