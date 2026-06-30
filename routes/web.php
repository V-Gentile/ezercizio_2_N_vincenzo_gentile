<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\DigimonController;
use App\Http\Controllers\CategoryController;


Route::get('/', [PublicController::class, 'home'])->name('home');

Route::get('/chi-siamo', [PublicController::class, 'chisiamo'])->name('chisiamo');

Route::get('/chi-siamo/dettagli/{name}',[PublicController::class, 'chisiamodettagli'])->name('chisiamodettagli');

Route::get('/servizi', [PublicController::class, 'servizi'])->name('servizi');

Route::get('/digidex', [DigimonController::class, 'digidex'])->name('digimon.list');

Route::get('/digimon/crea', [DigimonController::class, 'create'])->name('digimon.crea');

Route::post('/digimon/crea/submit', [DigimonController::class, 'store'])->name('digimon.submit');

Route::get('/digimon/digidettagli/{digimon}', [DigimonController::class, 'show'])->name('digimon.show');

Route::get('/digimon/edit/{digimon}', [DigimonController::class, 'edit'])->name('digimon.edit');

Route::put('/digimon/update/{digimon}', [DigimonController::class, 'update'])->name('digimon.update');

Route::delete('/digimon/delete/{digimon}', [DigimonController::class, 'delete'])->name('digimon.delete');

Route::get('/user/profile', [PublicController::class, 'profile'])->middleware('auth')->name('user.profile');

Route::get('/category/create', [CategoryController::class, 'create'])->name('category.create');

Route::post('/category/create/submit', [CategoryController::class, 'store'])->name('category.submit');

Route::get('/category/index', [CategoryController::class, 'index'])->name('category.index');

Route::get('/category/show/{category}', [CategoryController::class, 'show'])->name('category.show');
