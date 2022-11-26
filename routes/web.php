<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminuserController;
use App\Http\Controllers\userController;
use App\Http\Controllers\noteController;
use App\Http\Controllers\listnoteController;
use App\Http\Controllers\imagenoteController;
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
Route::resource('adminusers',adminuserController::class);
Route::resource('user',userController::class);
Route::resource('note',noteController::class);
Route::resource('listnote',listnoteController::class);
Route::resource('imagenote',imagenoteController::class);
//Usuarios Administradores
Route::post('/store', [adminuserController::class, 'store'])->name('adminuser.store');
Route::delete('/destroy/{id}', [adminuserController::class, 'destroy'])->name('adminusers.destroy');
Route::get('/show/{id}', [adminuserController::class, 'show'])->name('adminuser.show');
Route::get('/edit/{id}', [adminuserController::class, 'edit'])->name('adminusers.edit');
Route::put('/update/{id}', [adminuserController::class, 'update'])->name('adminusers.update');
Route::get('/create', [adminuserController::class, 'create'])->name('adminuser.create');
//Usuarios
Route::post('/store', [userController::class, 'store'])->name('user.store');
Route::get('/create', [userController::class, 'create'])->name('user.create');
Route::get('/destroy/{id}', [userController::class, 'destroy'])->name('user.destroy');
Route::get('/show/{id}', [userController::class, 'show'])->name('user.show');
Route::get('/edit/{id}', [userController::class, 'edit'])->name('user.edit');
Route::put('/update/{id}', [userController::class, 'update'])->name('user.update');
//Notas
Route::post('/store', [noteController::class, 'store'])->name('note.store');
Route::get('/create', [noteController::class, 'create'])->name('note.create');
Route::get('/destroy/{id}', [noteController::class, 'destroy'])->name('note.destroy');
Route::get('/show/{id}', [noteController::class, 'show'])->name('note.show');
Route::get('/edit/{id}', [noteController::class, 'edit'])->name('note.edit');
Route::put('/update/{id}', [noteController::class, 'update'])->name('note.update');
//Notas de Imagen
Route::post('/store', [imagenoteController::class, 'store'])->name('imagenote.store');
Route::get('/create', [imagenoteController::class, 'create'])->name('imagenote.create');
Route::get('/destroy/{id}', [imagenoteController::class, 'destroy'])->name('imagenote.destroy');
Route::get('/show/{id}', [imagenoteController::class, 'show'])->name('imagenote.show');
Route::get('/edit/{id}', [imagenoteController::class, 'edit'])->name('imagenote.edit');
Route::put('/update/{id}', [imagenoteController::class, 'update'])->name('imagenote.update');
//Lista de Notas
Route::post('/store', [listnoteController::class, 'store'])->name('listnote.store');
Route::get('/create', [listnoteController::class, 'create'])->name('listnote.create');
Route::get('/destroy/{id}', [listnoteController::class, 'destroy'])->name('listnote.destroy');
Route::get('/show/{id}', [listnoteController::class, 'show'])->name('listnote.show');
Route::get('/edit/{id}', [listnoteController::class, 'edit'])->name('listnote.edit');
Route::put('/update/{id}', [listnoteController::class, 'update'])->name('listnote.update');