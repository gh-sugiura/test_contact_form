<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\ContactController;
use App\Http\Livewire\Modal;
use App\Models\Category;
use App\Models\Contact;


// contact from
Route::get("/", [ContactController::class, "index"]);
Route::post("/confirm", [ContactController::class, "confirm"]);
Route::post("/thanks", [ContactController::class, "thanks"]);


// for register
// display email authentication notification screen
Route::get("/email/verify", function () {
    return view("verify_email");
})->middleware("auth")->name("verification.notice");

// email authentication link processing
Route::get("/email/verify/{id}/{hash}", function (EmailVerificationRequest $request) {
    $request->fulfill();
    return redirect("/admin");
})->middleware(["auth","signed"])->name("verification.verify");

// resend authentication link
Route::post("/email/verification-notification", function (Request $request) {
    $request->user()->sendEmailVerificationNotification();
    return back()->with("message", "Verification link sent!");
})->middleware(["auth","throttle:6,1"])->name("verification.send");


// for admin
Route::middleware(["auth","verified"])->group(function () {
    Route::get("/admin", [ContactController::class, "admin"]);
    Route::post("/admin", [ContactController::class, "admin"]);
});
Route::get("/csv-export", [ContactController::class, "csvExport"]);
// Route::get("/test-modal-js", [ContactController::class, "modalJs"]);
// Route::get("/modal", [ContactController::class, "modal"]);


// use fortify default routing
// Route::get("/register", [ContactController::class, "register"]);
// Route::post("/register", [ContactController::class, "register"]);
// Route::get("/login", [ContactController::class, "login"]);
// Route::post("/login", [ContactController::class, "login"]);
// Route::get("/logout", [ContactController::class, "logout"]);
// Route::post("/logout", [ContactController::class, "logout"]);


?>