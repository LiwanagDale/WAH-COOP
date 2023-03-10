<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberInsertController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//insert data
Route::get('/insert',[MemberInsertController::class, 'insertform'])->name('member form');
Route::post('/create',[MemberInsertController::class, 'insert'])->name('member form create');

Route::get('/', function () {
    return view('welcome');
});
