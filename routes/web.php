<?php
use App\Http\Controllers\MonitorController;
use App\Http\Controllers\ComputadorController;
use App\Http\Controllers\FuncionarioController;
use App\Http\Controllers\ImpresoraController;
use App\Http\Controllers\MarcaController;
use App\Http\Controllers\OficinaController;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\SedeController;
use App\Http\Controllers\SistemaController;
use App\Http\Controllers\UnidadController;
use App\Http\Controllers\TelefonoController;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpKernel\Fragment\RoutableFragmentRenderer;

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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('roles', RolController::class)->middleware('auth');
Route::resource('sedes', SedeController::class)->middleware('auth');
Route::resource('oficinas', OficinaController::class)->middleware('auth');
Route::resource('funcionarios', FuncionarioController::class)->middleware('auth');
Route::resource('marcas', MarcaController::class)->middleware('auth');
Route::resource('sistemas', SistemaController::class)->middleware('auth');
Route::resource('unidades', UnidadController::class)->middleware('auth');
Route::resource('impresoras', ImpresoraController::class)->middleware('auth');
Route::resource('telefonos', TelefonoController::class)->middleware('auth');
Route::resource('computadores', ComputadorController::class)->middleware('auth');
Route::resource('monitores', MonitorController::class)->middleware('auth');
Route::get('reporte-pdf', [ComputadorController::class, 'generarpdf'])->middleware('auth');
Route::get('reporte-excel',[ComputadorController::class, 'exportExcel']);