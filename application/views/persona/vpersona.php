<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>
<body>
    <h1 align="center" color="purple">TEST SUCCESSFUL</h1>
    <br>
    <form action="<?php echo base_url(); ?>cpersona/guardar" method="POST">
        <table>

            <tr>
                <td> <label>Nombre</label> </td>
                <td> <input type="text" name="txtNombre"> </td>
            </tr>

            <tr>
                <td> <label>Ap paterno</label> </td>
                <td> <input type="text" name="txtApPaterno"> </td>
            </tr>

            <tr>
                <td> <label>e-mail</label> </td>
                <td> <input type="email" name="txtEmail"> </td>
            </tr>

            <tr>
                <td> <label>DNI</label> </td>
                <td> <input type="text" name="txtDNI" maxlength="8"> </td>
            </tr>

            <tr>
                <td> <label>fec. nac.</label> </td>
                <td> <input type="date" name="datFechNac"> </td>
            </tr>

            <tr>
                <td colspan="2"> <label>Usuario</label> </td>
            </tr>

            <tr>
                <td> <label>Usuario</label> </td>
                <td> <input type="text" name="txtUsuario"> </td>
            </tr>

            <tr>
                <td> <label>Contraseña</label> </td>
                <td> <input type="password" name="txtClave"> </td>
            </tr>

            <tr>
                <td colspan="2"> <input type="submit" value="Guardar"> </td>
            </tr>
        </table>
    </form>
    <a href="<?php echo base_url(); ?>clogin">Ya estoy registrado.</a>
</body>
</html>