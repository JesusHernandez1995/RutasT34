<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaisController;

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

/* Ejercicios relacionados con la unidad T34- Rutas */

Route::get('api/user', function () {
    return 'Closure';
});

Route::get('paises', [PaisController::class, 'index']);

Route::post('paises', [PaisController::class, 'store']);

Route::get('paises/{pais}', [PaisController::class, 'show']);

Route::put('paises/{pais}', [PaisController::class, 'update']);

/* Ejercicios relacionados con el Videoclub */

// Ruta Principal
Route::get('/', function () {
    // return view('welcome');
    return 'Pagina Principal';
});

// Ruta Login Usuario
Route::get('login', function () {
    return view('auth.login');
});

// Ruta Logout Usuario
Route::get('logout', function () {
    return 'Logout del usuario';
});

// Ruta Catalog
Route::get('catalog', function () {
    return view('catalog.index');
});

// Ruta Catalog/Show
Route::get('catalog/show/{id}', function ($id) {
    return 'Vista de película $id';
});