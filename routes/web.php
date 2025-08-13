<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TeamController;
use Illuminate\Support\Facades\Route;

// Route home
Route::get('/', [HomeController::class, "index"])->name("home");

// Route Home pour les pages
Route::get('/team', [TeamController::class, "index"])->name("team_front");
Route::get('/back/team', [TeamController::class, "index_back"])->name("employee_back");
Route::get('/back/team/add', [TeamController::class, "add_page"])->name("employee_add_back");
//Route Home pour ajouter/supprimer de la base de données 
Route::post('/back/team', [TeamController::class, "store"])->name("employee_store_back");
Route::delete('/back/team/{id}', [TeamController::class, "destroy"])->name("employee_destroy_back");

// Route contact
Route::get('/contact-us', [ContactController::class, "contact"])->name("contact_front");
Route::post('/contact-us', [ContactController::class, "store"])->name("contact_add_front");
Route::get('/back/contact-us', [HomeController::class, "index"])->name("contact_back");

// Route produit
Route::get('/product', [ProductController::class, "index"])->name("product_front");
Route::get('/back/product', [HomeController::class, "index"])->name("product_back");
Route::get('/back/product/add', [HomeController::class, "index"])->name("product_add_back");

