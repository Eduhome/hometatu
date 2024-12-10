<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\pages\ThingsIotController;
use App\Http\Controllers\pages\DeviceController;
use App\Http\Controllers\pages\DeviceControlController;
use App\Http\Controllers\ControlAssociationController;



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

$controller_path = 'App\Http\Controllers';

// Main Page Route

// pages


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
$controller_path = 'App\Http\Controllers';

    Route::get('/', $controller_path . '\pages\HomePage@index')->name('pages-home');

  // rutas de confguracion del objeto
    Route::get('/crear_objeto', [ThingsIotController::class, 'index'])->name('things_iots.index');
    Route::post('/things-iots/store', [ThingsIotController::class, 'store'])->name('things_iots.store');
    Route::get('/objeto_creado/{key_url}/setup', [ThingsIotController::class, 'showByKeyUrl'])->name('things_iots.showByKeyUrl');
    Route::post('/device/unlink/{deviceId}', [ThingsIotController::class, 'unlinkDevice'])->name('device.unlink');

    // listar dispositivos y objetos
    Route::get('/lista_objetos/lista', [ThingsIotController::class, 'things_lists'])->name('things_iots.show');
    Route::post('/objects/store', [ThingsIotController::class, 'store'])->name('objects.store');


    // ruta de dispositivos
    // routes/web.php
      Route::post('/devices', [DeviceController::class, 'store']);

      //rutas de controls de varaibles de los dispositivos
      Route::get('/list-device-control', [DeviceControlController::class, 'index'])->name('list.device_control');
      Route::get('/dispositivos', [DeviceControlController::class, 'getDispositivos'])->name('dispositivos.list');

      Route::get('/lista-dispositivos/lista/{id_device}', [DeviceControlController::class, 'create'])->name('add_controls.create');
      Route::post('/device-controls', [DeviceControlController::class, 'store'])->name('device_controls.store');

      Route::post('/associate-control', [ControlAssociationController::class, 'store'])->name('associate-control');

});



