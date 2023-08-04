<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\UserController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('todos/index',[TodoController::class,'index']) ->name('todos.index');
Route::get('todos/create',[TodoController::class,'create']) ->name('todos.create');
Route::post('todos/store',[TodoController::class,'store']) ->name('todos.store');
Route::get('todos/{id}/edit',[TodoController::class,'edit']) ->name('todos.edit');
Route::put('todos/update',[TodoController::class,'update']) ->name('todos.update');
Route::delete('todos/destroy',[TodoController::class,'destroy']) ->name('todos.destroy');

Route::post('/register', [UserController::class , 'register']);
Route::post('/logout', [UserController::class , 'logout']);
Route::post('/login', [UserController::class , 'login']);