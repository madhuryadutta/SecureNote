<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteController;

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

Route::get('/', [NoteController::class, 'create'])->name('notes.create');
Route::post('/', [NoteController::class, 'store'])->name('notes.store');
Route::get('/note/{id}', [NoteController::class, 'show'])->name('notes.show');
Route::post('/note/{id}', [NoteController::class, 'verify'])->name('notes.verify');
