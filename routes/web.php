<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\DigimonController;
use App\Http\Controllers\AttributeController;


Route::get('/', [PublicController::class, 'home'])->name('home');

Route::get('/chi-siamo', [PublicController::class, 'chisiamo'])->name('chisiamo');

Route::get('/chi-siamo/dettagli/{name}',[PublicController::class, 'chisiamodettagli'])->name('chisiamodettagli');

Route::get('/servizi', [PublicController::class, 'servizi'])->name('servizi');

Route::get('/digidex', [DigimonController::class, 'digidex'])->name('digimon.list');

Route::get('/digimon/crea', [DigimonController::class, 'crea'])->name('digimon.crea');

Route::post('/digimon/crea', [DigimonController::class, 'store'])->name('digimon.submit');

Route::get('/digimon/dettagli/{mon}', [DigimonController::class, 'mondettagli'])->name('digimon.dettagli');

Route::get('/digimon/edit/{mon}', [DigimonController::class, 'edit'])->name('digimon.edit');

Route::put('/digimon/update/{mon}', [DigimonController::class, 'update'])->name('digimon.update');

Route::delete('/digimon/elimina/{mon}', [DigimonController::class, 'destroy'])->name('digimon.destroy');

Route::get('/user/profile', [PublicController::class, 'profile'])->middleware('auth')->name('user.profile');

Route::get('/attribute/create', [AttributeController::class, 'create' ])->name('attribute.create');

Route::post('/attribute/create/submit', [AttributeController::class, 'store'])->name('attribute.submit');

Route::get('/attribute/index', [AttributeController::class, 'index'])->name('attribute.index');

Route::get('/attributo/{attribute}', [\App\Http\Controllers\AttributeController::class, 'show'])->name('attribute.show');
