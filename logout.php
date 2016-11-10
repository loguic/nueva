<?php
session_start();
$expire=time()-86400;

setcookie('nueva', $_SESSION['name'],$expire);

session_destroy();


echo "La sesión ha finalizado.....";

header("Refresh:3; url=index.php");



?>