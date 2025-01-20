<?php

use App\Http\Controllers\CardController;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\PaginaController;
use App\Http\Controllers\BusquedaController;
use App\Http\Controllers\panel\InicioController;
use App\Http\Controllers\panel\MisVisController;
use App\Http\Controllers\panel\RedesController;
use App\Http\Controllers\panel\ServicioController;
use App\Http\Controllers\panel\ProductsController;
use App\Http\Controllers\Productos\IluminacionController;
use App\Http\Controllers\Productos\HerramientasController;
use App\Http\Controllers\PanelController;
use App\Http\Controllers\RedirectController;
use App\Http\Controllers\SeoController;
use Illuminate\Support\Facades\Route;

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
// RUTAS PAGINA WEB
Route::get('/', [PaginaController::class, 'index']);
Route::get('/404', [PaginaController::class, 'redirect']);
// RUTAS PANEL DE CONTROL

Route::get('admin', [PanelController::class, 'index'])->middleware('check.auth');

// Rutas productos
Route::get('/productos',[ProductsController::class,'productos']);
Route::get('/buscar',[ProductsController::class,'buscar']);
// Rutas productos de iluminacion
Route::get('/products',[ProductsController::class,'inicio'])->middleware('check.auth');
Route::get('/products/iluminacion',[IluminacionController::class,'index'])->middleware('check.auth');
Route::get('/products/iluminacion/create',[IluminacionController::class,'create'])->middleware('check.auth');
Route::post('/products/iluminacion/store',[IluminacionController::class,'store'])->middleware('check.auth');
Route::get('/products/iluminacion/edit/{id}',[IluminacionController::class,'edit'])->middleware('check.auth');
Route::put('/products/iluminacion/update/{imagen}',[IluminacionController::class,'update'])->middleware('check.auth');
Route::get('/products/iluminacion/status/{id}',[IluminacionController::class,'status'])->middleware('check.auth');
Route::get('/products/iluminacionD',[IluminacionController::class,'indexD'])->middleware('check.auth');
// Rutas productos de herramientas
Route::get('/products/herramientas',[HerramientasController::class,'index'])->middleware('check.auth');
Route::get('/products/herramientas/create',[HerramientasController::class,'create'])->middleware('check.auth');
Route::post('/products/herramientas/store',[HerramientasController::class,'store'])->middleware('check.auth');
Route::get('/products/herramientas/edit/{id}',[HerramientasController::class,'edit'])->middleware('check.auth');
Route::put('/products/herramientas/update/{imagen}',[HerramientasController::class,'update'])->middleware('check.auth');
Route::get('/products/herramientas/status/{id}',[HerramientasController::class,'status'])->middleware('check.auth');
Route::get('/products/herramientasD',[HerramientasController::class,'indexD'])->middleware('check.auth');


// Rutas Servicios
Route::get('/servicios', [ServicioController::class, 'index'])->middleware('check.auth');
Route::get('/serviciosD', [ServicioController::class, 'desactivo'])->middleware('check.auth');
Route::get('/servicios/create', [ServicioController::class, 'create'])->middleware('check.auth');
Route::post('/servicios/store', [ServicioController::class, 'store'])->middleware('check.auth');
Route::get('/servicios/edit/{id}', [ServicioController::class, 'edit'])->middleware('check.auth');
Route::put('/servicios/update/{id}', [ServicioController::class, 'update'])->middleware('check.auth');
Route::get('/servicios/status/{id}', [ServicioController::class, 'status'])->middleware('check.auth');

// Ruta Mision y Vision

Route::get('/MisVis',[MisVisController::class, 'index'])->middleware('check.auth');
Route::get('/MisVis/edit/{id}', [MisVisController::class, 'edit'])->middleware('check.auth');
Route::put('/MisVis/update/{imagen}', [MisVisController::class, 'update'])->middleware('check.auth');


// Rutas redes
Route::get('/redes', [RedesController::class, 'index'])->middleware('check.auth');
Route::get('/createRed', [RedesController::class, 'create'])->middleware('check.auth');
Route::post('/storeRed', [RedesController::class, 'store'])->middleware('check.auth');
Route::get('/editRed/{id}', [RedesController::class,'edit'])->middleware('check.auth');
Route::put('/updateRed', [RedesController::class,'update'])->middleware('check.auth');
Route::get('/statusRed/{id}', [RedesController::class,'status'])->middleware('check.auth');
Route::get('/redesd', [RedesController::class, 'indexD'])->middleware('check.auth');

// Rutas empresa
Route::get('/empresa', [EmpresaController::class, 'index'])->middleware('check.auth');
Route::get('/empresa/edit/{id}', [EmpresaController::class,'edit'])->middleware('check.auth');
Route::put('/empresa/update/{imagen}', [EmpresaController::class,'update'])->middleware('check.auth');

// Rutas inicio 
Route::get('/inicio', [InicioController::class, 'index'])->middleware('check.auth');
Route::get('/createHome', [InicioController::class, 'create'])->middleware('check.auth');
Route::post('/storeHome', [InicioController::class, 'store'])->middleware('check.auth');
Route::get('/editHome/{id}', [InicioController::class,'edit'])->middleware('check.auth');
Route::put('/updateHome/{img}', [InicioController::class,'update'])->middleware('check.auth');
Route::get('/statusHome/{id}', [InicioController::class,'status'])->middleware('check.auth');
Route::get('/homed', [InicioController::class, 'indexD'])->middleware('check.auth');

// Rutas card
Route::get('/card', [CardController::class,'index']);
Route::get('/statusCard/{id}', [CardController::class,'status'])->middleware('check.auth');
Route::get('/editCard/{id}', [CardController::class,'edit'])->middleware('check.auth');
Route::put('/updateCard/{img}', [CardController::class,'update'])->middleware('check.auth');

Route::fallback([RedirectController::class, 'redirect']);

// SEO
Route::get('/seo', [SeoController::class, 'index'])->middleware('check.auth');
Route::get('/editSeo/{id}', [SeoController::class,'edit'])->middleware('check.auth');
Route::put('/updateSeo', [SeoController::class,'update'])->middleware('check.auth');


Auth::routes([
    'register' => false, 
    'reset' => false, 
    'verify' => false,
]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('check.auth');