<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [PagesController::class,'Accueil'])->name('Accueil');
Route::get('versions', [PagesController::class,'Version'])->name('Version');
Route :: middleware (['auth']) -> group (function () { 
    Route::get('Transfert',[PagesController::class,'Transfert'])->name('Transfert');
     
    });

Route::get('Login',[PagesController::class,'ShowLoginForm'])->name('Login');
     

Route::post('SaveLoginForm',[PagesController::class,'SaveLoginForm']);

