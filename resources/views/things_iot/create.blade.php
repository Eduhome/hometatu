@extends('layouts/layoutMaster')

@section('title', 'Crear cosas')



@section('content')
<div class="col-xl-12 col-lg-12 col-md-12 order-1 order-md-0">

  <!-- Customer-detail Card -->
  <div class="card mb-12">
    <div class="card-body">
      <div class="customer-avatar-section">
        <h5 class="card-title m-0">Crear Objeto</h5>
        <div class="d-flex align-items-center flex-column">
          <img class="img-fluid rounded my-3" src="../../assets/img/avatars/1.png" height="110" width="110" alt="User avatar">
          <div class="customer-info text-center">
            <h4 class="mb-1">Creacion de objeto para el dispositivo</h4>
          </div>
        </div>
      </div>
      <div class="info-container" style="text-align: center">
        <small class="d-block pt-4 border-top fw-normal text-uppercase text-muted my-3">Crear objeto</small>
           <div class="col-xl-12 col-lg-12 col-md-12">
            <p style="text-align: center">Cree un objeto para poder relacioar el dispositivo y poder controlar desde el objeto</p>
           </div>
        <div class="d-flex justify-content-center">
          <form action="{{ route('things_iots.store') }}" method="POST">



            @csrf
            <button type="submit" class="btn btn-primary me-3">Crear Objeto</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- /Customer-detail Card -->
</div>
@endsection



