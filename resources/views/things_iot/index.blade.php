@extends('layouts/layoutMaster')

@section('title', 'Detalles del Objeto')

@section('content')
<div class="container">
  <div class="row">

    <div class="col-12 col-sm-12 col-lg-6 mb-3">
      <div class="card mb-3">
        <div class="card-body">
          <div class="customer-avatar-section">
            <h5 class="card-title m-1">Configuración del Objeto</h5>
            <div class="d-flex flex-column">
              <div class="customer-info text-center">
                <h4 class="mb-1">{{ $thingIot->name }}</h4>
                <p>id: {{ $thingIot->id }}</p>
                <p>Key URL: {{ $thingIot->key_url }}</p>
                <p>User ID: {{ $thingIot->user_id }}</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-12 col-sm-12 col-lg-6  mb-3">
      <div class="card">
        <div class="card-body">
          <i class="mb-3 bx bx-md bx-user"></i>
          <h5>Crear dispositivos</h5>
          <p>Easily update the user data on the go, built in form validation and custom controls.</p>
          @if($activeDevices->isEmpty())
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#onboardHorizontalImageModal">
              Crear Dispositivo
            </button>
          @endif

          <h5 class="mt-4">Dispositivos</h5>
          @if($activeDevices->isEmpty())
            <p>No hay dispositivos creados.</p>
          @else
            <ul class="list-group">
              @foreach($activeDevices as $device)
                <li class="list-group-item">
                  <strong>Nombre:</strong> {{ $device->name }}<br>
                  <strong>Secret Key:</strong> {{ $device->secret_key }}<br>
                  <form action="{{ route('device.unlink', $device->id) }}" method="POST" style="display:inline;">
                      @csrf
                      <button type="submit" class="btn btn-danger ">Desvincular</button>
                    </form>
                </li>
              @endforeach
            </ul>
          @endif
        </div>
      </div>
    </div>

  </div>
</div>
@endsection

{{-- llamado del modal --}}
@include('things_iot.modals.config_modal_device', ['thingIot' => $thingIot])

@section('javascript')
<script src="{{ asset('js/pages-pricing.js') }}"></script>

@endsection
