<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Models\Category;
use App\Models\Contact;
use App\Models\Staff;

Route::get('/', [ContactController::class, 'index']);
Route::get('/confirm', [ContactController::class, 'confirm']);
Route::get('/thanks', [ContactController::class, 'thanks']);
Route::get('/admin', [ContactController::class, 'admin']);
Route::get('/register', [ContactController::class, 'register']);
Route::get('/login', [ContactController::class, 'login']);

?>
