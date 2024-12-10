<?php

namespace App\Http\Controllers;

use App\Models\DeviceControl;
use App\Models\Device;

use Illuminate\Http\Request;

class ControlAssociationController extends Controller
{
    //

    public function store(Request $request)
    {
        // Validar los datos recibidos
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'device_control_id' => 'required|exists:device_controls,id',
        ]);

        // Buscar el control a asociar
        $control = DeviceControl::find($validatedData['device_control_id']);

        if (!$control) {
            return response()->json(['error' => 'Control no encontrado'], 404);
        }

        // Actualizar el nombre del control (si es necesario)
        $control->name = $validatedData['name'];
        $control->save();

        // Responder con éxito
        return response()->json(['message' => 'Control asociado exitosamente']);
    }
}
