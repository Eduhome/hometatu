<?php
namespace App\Http\Controllers\pages;

use App\Http\Controllers\Controller;

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
        return view('device_controls.create', compact('id_device'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
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
            // Campos opcionales permitidos como nulos

            'campo_personalizado1' => $request->campo_personalizado1 ?? null,
            'campo_personalizado2' => $request->campo_personalizado2 ?? null,
            'campo_personalizado3' => $request->campo_personalizado3 ?? null,
            'status' => $request->status ?? 1,
        ]);

        return response()->json(['success' => 'Variable creada exitosamente.']);
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
