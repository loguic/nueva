<?php

mysql_connect("localhost", "root", "") or die("No se pudo conectar....");
mysql_select_db("nueva");

$resultado = mysql_query("DELETE FROM usuarios WHERE id='".$_REQUEST['id']."'");

echo "El usuario ha sido eliminado!!";

mysql_close();

include('links.php');



?>