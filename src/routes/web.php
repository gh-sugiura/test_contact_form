<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Livewire\Modal;
use App\Models\Category;
use App\Models\Contact;


Route::get('/', [ContactController::class, 'index']);
Route::post('/confirm', [ContactController::class, 'confirm']);
Route::post('/thanks', [ContactController::class, 'thanks']);

Route::get('/register', [ContactController::class, 'register']);
Route::post('/login', [ContactController::class, 'login']);
Route::get('/admin', [ContactController::class, 'admin']);
Route::get('/modal', [ContactController::class, 'modal']);

?>
