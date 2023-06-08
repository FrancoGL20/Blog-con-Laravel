<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/', [HomeController::class, 'show'])->name('inicio'); // Ruta para mostrar el home (página de inicio)

Route::controller(PostsController::class)->group(function(){
    Route::get('/posts', 'index'); // Para obtener los posts
    Route::get('/posts/create', 'create'); // Formulario para crear un post
    Route::post('/posts', 'store'); // Para guardar un post
    Route::get('/posts/{post}', 'show'); // Para mostrar un post
    Route::get('/posts/{post}/edit', 'edit'); // Formulario para editar un post
    Route::patch('/posts/{post}', 'update'); // Para actualizar un post
    Route::delete('/posts/{post}', 'destroy'); // Para eliminar un post
});