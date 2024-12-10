@extends('layouts/layoutMaster')

@section('title', 'Lista de Objetos IOT')

@section('content')
    <div class="content-wrapper">
        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="py-3 breadcrumb-wrapper mb-4">
                <span class="text-muted fw-light">IOT /</span> Lista de Objetos
            </h4>

            <div class="card">
                <div class="card-datatable table-responsive pt-0">
                    <table class="datatables-basic table table-bordered">
                        <thead>
                            <tr>
                                <th>Usuario</th>
                                <th>URL</th>
                                <th>Fecha de creación</th>
                                <th>Nombre del dispositivo</th>
                                <th>Estado</th>
                                <th>Accion</th>
                            </tr>
                        </thead>
                        <tbody>
                          @foreach ($things as $thing)
                            <tr>
                                <td>{{ $thing->name }}</td>
                                <td>
                                    <a href="{{ url('/objeto_creado/' . $thing->key_url . '/setup') }}" target="_blank">{{ $thing->key_url }}</a>
                                </td>
                                <td>{{ $thing->created_at }}</td>
                                <td>{{ $thing->device_name }}</td>
                                <td>{{ $thing->status == 1 ? 'Activo' : 'Inactivo' }}</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="{{ route('add_controls.create', ['id_device' => $thing->id]) }}"
                                          data-bs-toggle="tooltip" class="text-body" data-bs-placement="top"
                                          aria-label="Send Mail" data-bs-original-title="Agregar variables">
                                          <i class="bx bx-add-to-queue mx-1"></i>
                                        </a>

                                        <a href="app-invoice-preview.html"
                                          data-bs-toggle="tooltip" class="text-body" data-bs-placement="top"
                                          aria-label="Preview Invoice" data-bs-original-title="Ver variables">
                                          <i class="bx bx-show mx-1"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="content-backdrop fade"></div>
    </div>
@endsection
