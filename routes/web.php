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
// Route Home pour ajouter/supprimer de la base de données 
Route::post('/back/team', [TeamController::class, "store"])->name("employee_store_back");
Route::delete('/back/team/{id}', [TeamController::class, "destroy"])->name("employee_destroy_back");
Route::get('/back/team/show/{id}', [TeamController::class, "show"])->name("employee_show_back");

// Route contact pour les pages
Route::get('/contact-us', [ContactController::class, "contact"])->name("contact_front");
Route::get('/back/contact-us', [ContactController::class, "index_back"])->name("contact_back");
// Route Contact pour ajouter/supprimer de la base de données 
Route::post('/contact-us', [ContactController::class, "store"])->name("contact_store_front");
Route::delete('/back/contact-us/{id}', [ContactController::class, "destroy"])->name("contact_destroy_back");
Route::get('/back/contact-us/show/{id}', [ContactController::class, "show"])->name("contact_show_back");

// Route contact pour les pages
Route::get('/product', [ProductController::class, "index"])->name("product_front");
Route::get('/back/product', [ProductController::class, "index_back"])->name("product_back");
Route::get('/back/product/add', [ProductController::class, "add_page"])->name("product_add_back");
// Route Contact pour ajouter/supprimer de la base de données 
Route::post('/back/product', [ProductController::class, "store"])->name("product_store_back");
Route::delete('/back/product/{id}', [ProductController::class, "destroy"])->name("product_destroy_back");
Route::get('/back/product/show/{id}', [ProductController::class, "show"])->name("product_show_back");

