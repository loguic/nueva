<?php
session_start();
session_destroy();


echo "La sesión ha finalizado.....";

header("Refresh:3; url=index.php");



?>