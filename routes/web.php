<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EmployeController;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('master');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
});

require __DIR__.'/auth.php';

// Route::get('/employes', [EmployeController::class, 'index'])->name('employe.index');
Route::get('/form', [EmployeController::class, 'create'])->name('employe.create');
Route::get('/ajouter', [EmployeController::class, 'store'])->name('employe.store');
Route::get('/present', [EmployeController::class, 'present'])->name('employe.present');
Route::put('/absent', [EmployeController::class, 'absent'])->name('employe.absent');
Route::delete('/conges', [EmployeController::class, 'conges'])->name('employe.conges');
Route::resource('employes',EmployeController::class);