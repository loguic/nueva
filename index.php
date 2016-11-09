<?php

if(isset($_COOKIE['nueva'])){
    header("Location:enter.php");
}else{
    
    
echo '
<html>

<head>
    <title>Bienvenidos</title>
</head>

<body>
    <center>
        <h2>Bienvenidos a un Nuevo Portal</h2> Por favor haz login....
        <form method="post" action="login.php">
            <table border="0" width="30%">
                <tr>
                    <td width="10%">Nombre:</td>
                    <td>
                        <input type="text" name="nombre" maxlength="20" />
                    </td>
                </tr>
                <br />

                <tr>
                    <td width="10%">Password:</td>
                    <td>
                        <input type="password" name="pass" maxlength="20" />
                    </td>
                </tr>
                <br />
                </table>
                Mantener sesión iniciada?<input type="checkbox" name="recuerda" />
            <p>
                <input type="submit" name="submit" value="login" />
        </form>

        <a href="form.php">Registrarse</a>



    </center>

</body>

</html>';
    
}
?>