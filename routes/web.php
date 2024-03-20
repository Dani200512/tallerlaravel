<?php

use App\Http\Controllers\BodyController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\QuarterController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SoldierController;
use App\Models\Quarter;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'hola desde home';
});



Route::get('/soldier',[SoldierController::class,'create']);
Route::post('/storeSoldier',[SoldierController::class,'store'])->name('Soldier.store');


Route::get('/quarter',[QuarterController::class,'create2']);
Route::post('/storeQuarter',[QuarterController::class,'store2'])->name('Quarter.store');


Route::get('/Body',[BodyController::class,'create3']);
Route::post('/storeBody',[BodyController::class,'store3'])->name('Body.store');

Route::get('/Company',[CompanyController::class,'create4']);
Route::post('/storeBody',[CompanyController::class,'store4'])->name('Company.store');


Route::get('/Service',[ServiceController::class,'create5']);
Route::post('/storeBody',[ServiceController::class,'store5'])->name('Service.store');
