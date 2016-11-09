<?php

mysql_connect("localhost", "root", "") or die("No se pudo conectar....");
mysql_select_db("nueva");
$resultado = mysql_query("SELECT * FROM usuarios");

//recogemoso recorremos toda la informacion atraves de un ciclo de una base de datos
while ($row = mysql_fetch_array($resultado)) {
    echo $row['nombre'] . " " . $row['email'] . " " . $row['password'];
    echo "<br />";

}

echo "<a href='form.php'>Volver al registro</a> ";

mysql_close();
