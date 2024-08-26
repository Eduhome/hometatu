<?php

namespace App\Http\Controllers\pages;

use App\Http\Controllers\Controller;
use App\Models\Things_iot;
use App\Models\Device;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ThingsIotController extends Controller
{
    public function index()
    {
        return view('things_iot.create');
    }

    public function create()
    {

    }

    public function store(Request $request)
    {
      if (!Auth::check()) {
        return redirect()->route('login')->with('error', 'Debe iniciar sesión para crear un objeto.');
    }

        $key_url = Str::random(20);
        $user_id = Auth::id();




        $thingIot = Things_iot::create([
          'name' => 'unititled',
          'key_url' => $key_url,
          'user_id' => $user_id,
          'campo_personalizado1' => null,
          'campo_personalizado2' => null,
          'campo_personalizado3' => null,
      ]);



        return redirect()->route('things_iots.showByKeyUrl', ['key_url' => $key_url]);
    }



    public function showByKeyUrl($key_url){

    $thingIot = Things_iot::where('key_url', $key_url)->firstOrFail();
    $activeDevices = Device::where('things_iots', $thingIot->id)->where('status', 1)->get();
    dd($activeDevices);

    if (Auth::check() && Auth::id() !== $thingIot->user_id) {
        return abort(403, 'Acceso denegado.');
    }
    return view('things_iot.index', compact('thingIot', 'activeDevices'));
    }


public function unlinkDevice($deviceId)
{
    $device = Device::findOrFail($deviceId);
    $device->status = 0;
    $device->save();

    return redirect()->back()->with('success', 'Dispositivo desvinculado exitosamente.');
}





    public function show(Things_iot $things_iot)
    {
        //
    }

    public function edit(Things_iot $things_iot)
    {
        //
    }

    public function update(Request $request, Things_iot $things_iot)
    {
        //
    }

    public function destroy(Things_iot $things_iot)
    {
        //
    }

    public function things_lists(Request $request)
{
    $Things = Things_iot::select(
        'users.name',
        'things_iots.key_url',
        'things_iots.created_at',
        'devices.name as device_name',
        'things_iots.status',
        'devices.id'
    )
    ->join('users', 'things_iots.user_id', '=', 'users.id')
    ->join('devices', 'things_iots.id', '=', 'devices.things_iots')
    ->where('devices.status', 1)
    ->get();

    return view('things_iot.show', ['things' => $Things]);
}

}


