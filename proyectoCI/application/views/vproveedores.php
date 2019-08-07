<div class="row">
    

<div class="col-lg-4 ml-2">
    <div class="card shadow mb-4 border-left-primary"> 
        <div class="card-body">

            <form action="<?php echo base_url();?>cproveedores/guardarProve" method="POST">

                <p class='text-gray-800'> <strong> Ingresa un proveedor </strong> </p>

                <input type="text" name="txtNombre" placeholder="Nombre" class="form-control form-control-user">

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
                              <th>Nombre</th>
                            </tr>
                </table>
            </div>
        </div>

</div> <!-- end row -->

<div class="row">
    <div class="col-lg-6">
        
    </div>

    <div class="col-lg-2">
        <button type="button" class="btn btn-block btn-primary" id="btnGuardarProv">Guardar</button>
    </div>
    
</div>

</div>

<script type="text/javascript">
	var baseurl = "<?php echo base_url();?>";
</script>