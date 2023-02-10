<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;

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

// Route::get('/', HomeController::class);

// Route::controller(CursoController::class)->group(function () {
//     Route::get('cursos', 'index');

//     Route::get('cursos/create', 'create');


//     Route::get('cursos/{curso}', 'show');
// });

Route::get('/', HomeController::class);

Route::get('cursos', [CursoController::class, 'index'])->name('cursos.index');

Route::get('cursos/create', [CursoController::class, 'create'])->name('cursos.create');

Route::get('cursos/{id}', [CursoController::class, 'show'])->name('cursos.show');
// me quede en el min 11:50 video 16


// Route::get('cursos/{curso}/{categoria?}', function ($curso, $categoria= null) {

//     if ($categoria) {
//         return "Bienvenido al curso $curso, de la categoría $categoria";
//     } else {
//         return "Bienvenido al curso: $curso";
//     }

    
// });
