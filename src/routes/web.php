<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Livewire\Modal;
use App\Models\Category;
use App\Models\Contact;

// contact from
Route::get('/', [ContactController::class, 'index']);
Route::post('/confirm', [ContactController::class, 'confirm']);
Route::post('/thanks', [ContactController::class, 'thanks']);

// for admin
Route::get('/register', [ContactController::class, 'register']);
// Route::post('/register', [ContactController::class, 'register']);
Route::get('/login', [ContactController::class, 'login']);
// Route::post('/login', [ContactController::class, 'login']);
Route::get('/modal', [ContactController::class, 'modal']);




Route::middleware('auth')->group(function () {
    Route::get('/admin', [ContactController::class, 'admin']);
    Route::post('/admin', [ContactController::class, 'admin']);
});

Route::get('/admin', [ContactController::class, 'admin']);
Route::post('/admin', [ContactController::class, 'admin']);

?>
