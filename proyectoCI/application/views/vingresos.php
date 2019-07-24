<div class="col-lg-4">
    <div class="card shadow mb-4"> 
        <!-- py-3 border-left-primary p-5 -->
        <div class="card-body">

            <form action="<?php echo base_url();?>cingresos/guardarProd" method="POST">

                <p class='text-gray-800'> <strong> Ingresa un producto </strong> </p>

                <input type="text" name="txtNombre" placeholder="Nombre" class="form-control form-control-user">
                <br>
                <input type="text" name="txtCategoria" placeholder="Categoria" class="form-control form-control-user">
                <br>
                <input type="number" name="txtCantidad" placeholder="cantidad" class="form-control form-control-user">
                <br>
                <input type="number" name="txtPrecio" placeholder="precio" class="form-control form-control-user">
                <br>
                <select id="cboProveedor" class="form-control">
                    <option value="">Seleccione...</option>
                </select>
                <br>
                <input type="submit" value="Ingresar." class="btn btn-primary">

            </form>

        </div>
    </div>
</div>