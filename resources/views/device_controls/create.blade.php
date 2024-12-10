@extends('layouts/layoutMaster')

@section('title', 'Lista de Objetos IOT')
@section('content')


    <div class="content-wrapper">

        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">


            <h4 class="py-3 breadcrumb-wrapper mb-4">
                <span class="text-muted fw-light">IOT /</span> Crear control del dispositivo
            </h4>

            <!-- Invoice List Widget -->

            <div class="card mb-4">
                <div class="card-widget-separator-wrapper">
                    <div class="card-body card-widget-separator">
                        <div class="row gy-4 gy-sm-1">
                            <div class="col-sm-6 col-lg-3">
                                <div
                                    class="d-flex justify-content-between align-items-start card-widget-1 border-end pb-3 pb-sm-0">
                                    <div>
                                        <h3 class="mb-1">24</h3>
                                        <p class="mb-0">Cantidad de varaibles</p>
                                    </div>
                                    <div class="avatar me-sm-4">
                                        <span class="avatar-initial rounded bg-label-secondary">
                                            <i class="bx bx-user bx-sm"></i>
                                        </span>
                                    </div>
                                </div>
                                <hr class="d-none d-sm-block d-lg-none me-4">
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div
                                    class="d-flex justify-content-between align-items-start card-widget-2 border-end pb-3 pb-sm-0">
                                    <div>
                                        <h3 class="mb-1">165</h3>
                                        <p class="mb-0">Invoices</p>
                                    </div>
                                    <div class="avatar me-lg-4">
                                        <span class="avatar-initial rounded bg-label-secondary">
                                            <i class="bx bx-file bx-sm"></i>
                                        </span>
                                    </div>
                                </div>
                                <hr class="d-none d-sm-block d-lg-none">
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div
                                    class="d-flex justify-content-between align-items-start border-end pb-3 pb-sm-0 card-widget-3">
                                    <div>
                                        <h3 class="mb-1">$2.46k</h3>
                                        <p class="mb-0">Paid</p>
                                    </div>
                                    <div class="avatar me-sm-4">
                                        <span class="avatar-initial rounded bg-label-secondary">
                                            <i class="bx bx-check-double bx-sm"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="d-flex justify-content-between align-items-start">
                                    <div>
                                        <h3 class="mb-1">$876</h3>
                                        <p class="mb-0">Unpaid</p>
                                    </div>
                                    <div class="avatar">
                                        <span class="avatar-initial rounded bg-label-secondary">
                                            <i class="bx bx-error-circle bx-sm"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div
                        class="col-12 col-md-6 d-flex align-items-center justify-content-center justify-content-md-start gap-3">

                                    <div class="dt-buttons">
                                      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalCenter">
                                        Crear variable de control
                                      </button>
                                    </div>
                                </div>
                                <br>






            <div class="card">
              <div class="card-datatable table-responsive pt-0">
                  <table class="datatables-basic table table-bordered" id = "dispositivo">
                      <thead>
                          <tr>
                              <th>ID</th>
                              <th>NOMBRE</th>
                              <th>TYPE</th>
                              <th>VALOR</th>
                              <th>ESTADO</th>
                          </tr>
                      </thead>
                      <tbody>
                        @foreach ($lista_dispositivos as $dispositivos)
                        <tr>
                          <td>{{$dispositivos->dispositivo}}</td>
                          <td>{{$dispositivos->secret_key}}</td>
                          <td>{{$dispositivos->nombre_control}}</td>
                          <td>{{$dispositivos->control_type}}</td>
                          <td>{{ $dispositivos->status == 1 ? 'Activo' : 'Inactivo' }}</td>


                        </tr>

                        @endforeach


                      </tbody>
                  </table>
              </div>
          </div>

        </div>
        <!-- / Content -->
    </div>
{{-- llamado del modal --}}
@include('device_controls.modals.create_controls', ['id_device' => $id_device])




@endsection

@section('javascript')
<script>
  $(document).ready( function () {
    $('#dispositivo').DataTable();
} );
</script>
@endsection

