<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\FrontController;
use Illuminate\Support\Facades\Route;

// Route front-end
Route::get('/', [FrontController::class, "home"])->name("home");
Route::get('/team', [FrontController::class, "home"])->name("team_front");
Route::get('/product', [FrontController::class, "home"])->name("product_front");
// Route contact
Route::get('/contact-us', [ContactController::class, "contact"])->name("contact_front");
Route::post('/contact-us', [ContactController::class, "store"])->name("contact_add_front");

// Route back-end
Route::get('/back/employee', [FrontController::class, "home"])->name("employee_back");
Route::get('/back/employee/add', [FrontController::class, "home"])->name("employee_add_back");
Route::get('/back/product', [FrontController::class, "home"])->name("product_back");
Route::get('/back/product/add', [FrontController::class, "home"])->name("product_add_back");
Route::get('/back/message', [FrontController::class, "home"])->name("message_back");
