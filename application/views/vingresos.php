<div class="row">
    

<div class="col-lg-4 ml-2">
    <div class="card shadow mb-4"> 
        <!-- py-3 border-left-primary p-5 -->
        <div class="card-body">

            <form action="<?php echo base_url();?>cingresos/guardarProd" method="POST">

                <p class='text-gray-800'> <strong> Ingresa un producto </strong> </p>

                <input type="text" name="txtNombre" placeholder="Nombre" class="form-control form-control-user">
                <br>
                <select id="cboCategoria" name="txtCategoria" class="form-control">
                    <option  value="">Seleccione...</option>
                </select>
                <br>
                <input type="number" name="txtCantidad" placeholder="cantidad" class="form-control form-control-user">
                <br>
                <input type="number" name="txtPrecio" placeholder="precio" class="form-control form-control-user">
                <br>
                <select id="cboProveedor" name="txtProveedor" class="form-control">
                    <option  value="">Seleccione...</option>
                </select>
                <br>
                <input type="submit" value="Ingresar." class="btn btn-primary">

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
                              <th style="width: 50%">Proveedor</th>
                            </tr>

                          </table>
                </div>
        </div>

</div>

<div class="row">
    <div class="col-lg-6">
        
    </div>

    <div class="col-lg-2">
        <button type="button" class="btn btn-block btn-primary" id="btnGuardarProd">Guardar</button>
    </div>
    
</div>

<script type="text/javascript">
	var baseurl = "<?php echo base_url();?>";
</script>