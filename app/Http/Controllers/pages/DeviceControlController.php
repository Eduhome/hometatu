<?php
namespace App\Http\Controllers\pages;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

use App\Models\DeviceControl;
use Illuminate\Http\Request;

class DeviceControlController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('device_controls.index' );
    }

    public function getDispositivos(){

      $dispositivos = DeviceControl::all(); // Obtener todos los dispositivos

      return response()->json([
          'data' => $dispositivos
      ]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id_device)
    {
      // dd($id_device);
        // Aquí puedes utilizar $id_device para lo que necesites
      $userId = auth()->id(); // ID del usuario autenticado
      $lista_dispositivos = DB::table('things_iots')
        ->join('devices', 'things_iots.id', '=', 'devices.things_iots')
        ->join('device_controls', 'devices.id', '=', 'device_controls.device_id')
        ->join('users', 'devices.user_id', '=', 'users.id')
        ->where('device_controls.status', 1)
        ->where('devices.user_id',$userId )
        ->where('device_controls.device_id',$id_device )
        ->select(

            'devices.name as dispositivo',
            'devices.secret_key',
            'device_controls.name as nombre_control',
            'device_controls.control_type',
            'device_controls.permissions',
            'device_controls.status'

        )
        ->get();

        // dd($lista_dispositivos);


        return view('device_controls.create', compact('id_device', 'lista_dispositivos'));
      }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
{

    try {
        $request->validate([
            'name' => 'required|string|max:255',
            'control_type' => 'required|in:float,boolean,character',
            'permissions' => 'required|in:read-write,read-only',
            'update_policy' => 'required|in:on-change,periodically',
            'device_id' => 'required|exists:devices,id',
        ]);

        $deviceControl = DeviceControl::create([
            'device_id' => $request->device_id,
            'name' => $request->name,
            'control_type' => $request->control_type,
            'value' => $request->value ?? null,
            'permissions' => $request->permissions,
            'update_policy' => $request->update_policy,
            'campo_personalizado1' => $request->campo_personalizado1 ?? null,
            'campo_personalizado2' => $request->campo_personalizado2 ?? null,
            'campo_personalizado3' => $request->campo_personalizado3 ?? null,
            'status' => $request->status ?? 1,
        ]);

        return response()->json(['success' => 'Variable creada exitosamente.']);

    } catch (\Exception $e) {
        // Registra el error en el archivo de log
        \Log::error('Error al crear el DeviceControl: '.$e->getMessage());

        // Devuelve una respuesta JSON con el error
        return response()->json(['error' => 'Hubo un error al crear la variable.'], 500);
    }
}


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DeviceControl  $deviceControl
     * @return \Illuminate\Http\Response
     */
    public function show(DeviceControl $deviceControl)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DeviceControl  $deviceControl
     * @return \Illuminate\Http\Response
     */
    public function edit(DeviceControl $deviceControl)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DeviceControl  $deviceControl
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DeviceControl $deviceControl)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DeviceControl  $deviceControl
     * @return \Illuminate\Http\Response
     */
    public function destroy(DeviceControl $deviceControl)
    {
        //
    }
}
