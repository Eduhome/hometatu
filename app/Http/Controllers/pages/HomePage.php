<?php

namespace App\Http\Controllers\pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DeviceControl;

class HomePage extends Controller
{
  // public function probar()
  // {

  //   return view('content.pages.pages-home');
  // }


  public function index()
    {
        // Obtener todos los controles disponibles
        $deviceControls = DeviceControl::with('device')->get();

        // Pasar los controles a la vista
        return view('content.pages.pages-home', compact('deviceControls'));
    }
}
