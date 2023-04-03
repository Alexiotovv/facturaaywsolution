@extends('layouts.base')
@section('extra_css')
  <link href="../../../assets/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
@endsection
@section('content')
    @include('includes.form_productos')
    {{-- Tabla --}}
    <div class="card">
      <div class="card-body">
        <button class="btn btn-primary btn-sm" data-bs-toggle="modal" id="btnNuevoProducto"><i class="bx bx-plus-circle end"></i> Nuevo</button>
        <br>
        <br>
        <table class="dt-responsive table" id="DTProductos">
          <thead>
              <tr>
                  <th>Id</th>
                  <th>Acción</th>
                  <th>Código</th>
                  <th>Producto</th>
                  <th>Medida</th>
                  <th>Stock</th>
                  <th>Precio</th>
                  <th>Estado</th>
              </tr>
          </thead>
          <tbody>
    
          </tbody>
        </table>
      </div>
    </div>

  
  {{--  <script src="../../../js/datatables.min.js"></script>
  <script src="../../../js/datatables-buttons.min.js"></script>
  --}}
  
@section('extra_js')
  {{-- <script src="../../../assets/js/jquery.min.js"></script> --}}
  <script src="../../../assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
  <script src="../../../assets/plugins/datatable/js/dataTables.bootstrap5.min.js"></script>
  <script src="../../../app_js/crud.js"></script>
  <script src="../../../app_js/productos.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@endsection


@endsection


