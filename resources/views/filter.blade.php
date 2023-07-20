<!-- Modal -->
<div class="modal fade" id="modalFilter" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Filtrar empleado</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="" method="post" id="formFilter">  
            @csrf
            
            <div class="row">
                <div class="col-md-6 mb-3">
                <label for="Nombre">Nombre del empleado</label>
                <input type="text" class="form-control" name="nombre" id="inputNombreF" placeholder="Nombre">
                </div>

                <div class="col-md-6 mb-3">
                <label for="Nombre">Apellido</label>
                <input type="text" class="form-control" name="apellido" id="inputApellidoF" placeholder="Apellido">
                </div>

                <div class="col-md-6 mb-3">
                <label for="Nombre">Dirección</label>
                <input type="text" class="form-control" name="direccion" id="inputDireccionF" placeholder="Dirección">
                </div>

                <div class="col-md-6 mb-3">
                <label for="Nombre">Telefono</label>
                <input type="text" class="form-control" name="telefono" id="inputTelefonoF" placeholder="Tel">
                </div>

                <div class="col-md-6 mb-3">
                <label for="Nombre">Correo</label>
                <input type="text" class="form-control" name="correo" id="inputCorreoF" placeholder="Correo">
                </div>

                <div class="col-md-6 mb-3">
                <label for="Nombre">Departamento</label>
                <select name="id_depto" class="form-select" id="depto_select2">
                    <option value="" selected id="depto_select_option">Seleccionar Departamento</option>
                    <!-- render options -->
                </select>
                </div>
                <div class="col-md-6 mb-3">
                <label for="Nombre">Municipio</label>
                <select name="id_municipio" class="form-select" id="municipio_select2">
                  <!-- render options -->
                </select>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary">Buscar</button>
            </div>
        </form>
      </div>
      
    </div>
  </div>
</div>