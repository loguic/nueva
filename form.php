<html>

<head>
    <title>Registro</title>
</head>

<body>
    <center>
        <h2>Registro</h2>
        <form ENCTYPE="multipart/form-data" method="post" action="insert.php">
            <table border="0" width="30%">
                <tr>
                    <td width="10%">Nombre:</td>
                    <td>
                        <input type="text" name="nombre" maxlength="20" />
                    </td>
                </tr>
                <tr>
                    <td width="10%">Email:</td>
                    <td>
                        <input type="text" name="email" maxlength="20" />
                    </td>
                </tr>
                <tr>
                    <td width="10%">Password:</td>
                    <td>
                        <input type="password" name="pass" maxlength="20" />
                    </td>
                </tr>
                <tr>
                    <td width="10%">Confirmar Password:</td>
                    <td>
                        <input type="password" name="cpass" maxlength="20" />
                    </td>
                </tr>
                <input type="hidden" name="MAX_FILE_SIZE" value="50000" />
            </table>
            <p>

                Escoge una foto de tu ordenador:
                <input type="file" name="upload">
                <p>
                    <input type="submit" name="submit" value="enviar" />
        </form>


    </center>
</body>


</html>