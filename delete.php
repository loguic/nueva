<?php  

session_start();

if(!isset($_SESSION['name'])){
    
    echo "Acceso denegado !!";
    
}else{
    
    include('user.php');

echo "Digita el ID(usuario) a eliminar: ";
echo "<p>";

mysql_connect("localhost", "root", "") or die("No se pudo conectar....");
mysql_select_db("nueva");

$resultado = mysql_query("SELECT * FROM usuarios");

echo"<table width='90%' align='center' border=2";

echo "<tr><td width='40%' align='center' bgcolor='FFFFOO'>Id</td>
      <td width='40%' align='center' bgcolor='FFFFOO'>Nombre</td>
      <td width='40%' align='center' bgcolor='FFFFOO'>E-mail</td>
      <td width='40%' align='center' bgcolor='FFFFOO'>Password</td></tr>";

while($row = mysql_fetch_array($resultado)){
    $id = $row['id'];
    $nombre = $row['nombre'];
    $email = $row['email'];
    $password = $row['password'];
    
    echo "<tr><td align=center>
    <a href='delete1.php?id=$id&nombre=$nombre&email=$email&password=$password'>$id</a>
    <td>$nombre</td><td>$email</td><td>$password</td></tr>";



} echo"</table>";

mysql_close();




} 

?>