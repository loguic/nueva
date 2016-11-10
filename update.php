<?php  
session_start();

if(!isset($_SESSION['name'])){
    
    echo "Acceso denegado    !!";


}else{

   include('user.php');
echo "Selecciona el ID(usuario) a modificar: ";
echo "<p>";

mysql_connect("localhost", "root", "") or die("No se pudo conectar....");
mysql_select_db("nueva");

$por_pagina = 6;
//$query = mysql_query("SELECT nombre FROM usuarios LIMIT $start, $por_pagina");
$pagina_query = mysql_query("SELECT COUNT('id') FROM usuarios");
//redondeamos el resultado
$paginas = ceil(mysql_result($pagina_query, 0)/$por_pagina);

$pagina = (isset($_GET['pagina'])) ? (int)$_GET['pagina'] : 1;

$start = ($pagina-1) * $por_pagina;

$query = mysql_query("SELECT * FROM usuarios LIMIT $start, $por_pagina");



//$resultado = mysql_query("SELECT * FROM usuarios");

echo"<table width='90%' align='center' border=2";

echo "<tr><td width='40%' align='center' bgcolor='FFFFOO'>Id</td>
      <td width='40%' align='center' bgcolor='FFFFOO'>Nombre</td>
      <td width='40%' align='center' bgcolor='FFFFOO'>E-mail</td>
      <td width='40%' align='center' bgcolor='FFFFOO'>Password</td></tr>";

while($row = mysql_fetch_assoc($query)){
    $id = $row['id'];
    $nombre = $row['nombre'];
    $email = $row['email'];
    $password = $row['password'];
    
    echo "<tr><td align=center>
    <a href='edit.php?id=$id&nombre=$nombre&email=$email&password=$password'>$id</a>
    <td>$nombre</td><td><a href='email.php?email=$email'>$email</td><td>$password</td></tr>";



} echo"</table>";


$anterior = $pagina - 1;
$siguiente = $pagina + 1;

echo "<center><p>";

if(!($pagina <=1)){
    echo "<a href='update.php?pagina=$anterior'>Anterior</a> ";
}


if($paginas>=1){
    
    for($x=1;$x<=$paginas;$x++){
        
       echo ($x == $pagina) ? '<b><a href="?pagina='.$x.'">'.$x.'</a></b> ': '<a href="?pagina='.$x.'">'.$x.'</a> ';
    }
}


if(!($pagina>=$paginas)){
    
    echo "<a href='update.php?pagina=$siguiente'> Siguiente</a>";
}

echo "</center>";
mysql_close();

}

?>