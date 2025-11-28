<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Models\Task;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/task/create', [TaskController::class, 'create']);
Route::post('/task/store', [TaskController::class, 'store'])->name('task.store');
Route::get('/task/index', [TaskController::class, 'index'])->name('task.index');
Route::get('/task/edit/{task}', [TaskController::class, 'edit'])->name('task.edit');
Route::get('/task/show/{task}', [TaskController::class, 'show'])->name('task.show');
Route::post('/task/update/{task}', [TaskController::class, 'update'])->name('task.update');
Route::delete('/task/destroy/{task}', [TaskController::class, 'destroy'])->name('task.destroy');
