<div class="row">
    

<div class="col-lg-4 ml-2">
    <div class="card shadow mb-4 border-left-primary"> 
        <div class="card-body">

            <form action="<?php echo base_url();?>cingresos/guardarProd" method="POST">

                <p class='text-gray-800'> <strong> Ingresa un producto </strong> </p>

                <input type="text" name="txtNombre" placeholder="Nombre" class="form-control form-control-user">
                <br>

                <p class='text-gray-800'> Categoria  </p>

                <select id="cboCategoria" name="txtCategoria" class="form-control">
                    <option  value="">Seleccione...</option>
                </select>
                
                <br>
                
                <input type="number" min="0" name="txtCantidad" placeholder="cantidad" class="form-control form-control-user">
                
                <br>
                
                <input type="number" min="0" name="txtPrecio" placeholder="precio" class="form-control form-control-user">
                
                <br>
                <p class='text-gray-800'> Proveedor  </p>

                <select id="cboProveedor" name="txtProveedor" class="form-control">
                    <option  value="">Seleccione...</option>
                </select>
                
                <br>
                
                <input type="submit" value="Ingresar." class="btn btn-success">

            </form>

        </div>
        
    </div>
</div>

        <div class="col-lg-6">
            <div class="box box-primary">
                <table id="tblProductos" class="table table-bordered table-striped">
                            <tr>
                              <th style="width: 30%">Nombre</th>
                              <th style="width: 25%">Categoría</th>
                              <th style="width: 10%">Cantidad</th>
                              <th style="width: 10%">Precio</th>
                              <th style="width: 40%">Proveedor</th>
                              <th style="width: 10%">Delete</th>
                            </tr>
                </table>
            </div>
        </div>

</div> <!-- end row -->

<div class="row">
    <div class="col-lg-6">
        
    </div>

    <div class="col-lg-2">
        <button type="button" class="btn btn-block btn-success" id="btnGuardarProd">Guardar</button>
    </div>

    <div class="col-lg-2">
        <button type="button" class="btn btn-block btn-primary" id="btnBorrarProd">Eliminar</button>
    </div>
    
</div>

<script type="text/javascript">
	var baseurl = "<?php echo base_url();?>";
</script>