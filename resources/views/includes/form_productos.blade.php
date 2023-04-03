

<form id="formProducto" method="POST">@csrf
    <div class="modal-size-lg d-inline-block">
        <div class="modal fade text-start" id="modalProducto" tabindex="-1" aria-labelledby="myModalLabel17" aria-hidden="true" >
          <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <strong><p class="modal-title" id="etiquetaProducto"></p></strong>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <div class="row">
                  <div class="col-md-2">
                    <label for="">Id</label>
                    <input type="text" id="idProducto" class="form-control form-control-md" disabled>
                  </div>
                  <div class="col-md-4">
                    <label for="">Código</label>
                    <input type="text" class="form-control form-control-md" id="prod_codigo" name="prod_codigo" required>
                    <div class="invalid-feedback" id="valid_codigo">
                      Código ya Existe.
                    </div>
                    
                  </div>
                  <div class="col-md-6">
                    <label for="">Nombre</label>
                    <input type="text" class="form-control form-control-md" id="prod_nombre" name="prod_nombre" required>
                  </div>
                  <div class="col-md-4">
                    <label for="">Medida</label>
                    <select name="prod_medida" id="prod_medida" class="form-select form-select-md" id="prod_medida" name="prod_medida">
                      @foreach ($unidades as $u)
                        @if ($u->id==58)
                          <option selected value="{{$u->id}}">{{$u->cod}}-{{$u->nombre}}</option>  
                        @else
                          <option value="{{$u->id}}">{{$u->cod}}-{{$u->nombre}}</option>  
                        @endif
                        
                      @endforeach
                    </select>
                  </div>
                  <div class="col-md-3">
                    <label for="">Stock</label>
                    <input type="number" step="0.01" value="0.00" class="form-control form-control-md" id="prod_stock" name="prod_stock">
                  </div>
                  <div class="col-md-3">
                    <label for="">Precio</label>
                    <input type="number" step="0.01" value ="0.00" class="form-control form-control-md" id="prod_precio" name="prod_precio">
                  </div>
                  <div class="col-md-2">
                    <label for="">Activo</label>
                    <select name="activo" id="activo" class="form-select" id="activo" name="activo">
                      <option value="1">Si</option>
                      <option value="0">No</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="submit" class="btn btn-primary" id="btnGuardar">Guardar</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      
</form>









