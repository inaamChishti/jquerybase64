<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[CrudController::class,'index']);
Route::post('storeData',[CrudController::class,'store'])->name('images.store');
Route::get('table',[CrudController::class,'show']);
Route::get('editTable/{id}',[CrudController::class,'edit']);
Route::post('updateform',[CrudController::class,'update']);