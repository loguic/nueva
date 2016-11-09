<?php  



mysql_connect("localhost", "root", "") or die("No se pudo conectar....");
mysql_select_db("nueva");

$resultado = mysql_query("SELECT * FROM usuarios WHERE id='".$_REQUEST['id']."'");

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
    
    echo "<tr><td align=center>$id</td>
    
    <td>$nombre</td><td>$email</td><td>$password</td></tr>";



} echo"</table>";

mysql_close();

include('links.php');

?>


<form methodo="post" action="delete2.php">
    <p>Esta seguro de borrar este usuário?</p>
    <input type="submit" name="submit" value="SÏ">&nbsp <a href="delete.php">NO</a>
    <input type="hidden" name="id" value="<?php echo $_REQUEST['id'];?>">
</form>

<?php include('links.php'); ?>