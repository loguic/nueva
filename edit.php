<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>

    <h3>Editar usuário: <?php echo $_REQUEST['nombre']; ?></h3>

    <form ENCTYPE="multipart/form-data" metodo="post" action="actualiza.php">
        <table border="0" width="60%">
            <tr>
                <td width="30%">Nombre:</td>
                <td>
                    <input type="text" name="nuevonombre" value="<?php echo $_REQUEST['nombre'];?>" />
                </td>
            </tr>
            <tr>
                <td width="30%">Email:</td>
                <td>
                    <input type="text" name="nuevoemail" value="<?php echo $_REQUEST['email'];?>" />
                </td>
            </tr>
            <tr>
                <td width="30%">Password:</td>
                <td>
                    <input type="password" name="nuevapassword" value="" />
                </td>
            </tr>

        </table>

        Actualiza tu foto aquí:
        <input type="file" name="nuevafoto" />
        <p>

            <input type="submit" name="submit" value="Actualizar" />
            <input type="hidden" name="id" value="<?php echo $_REQUEST['id'];?>" />
    </form>
</body>

</html>