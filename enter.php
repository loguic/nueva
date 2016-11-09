<?php
session_start();
if(isset($_SESSION['name']) || isset($_COOKIE['nueva'])){
    
    include('user.php');
}else{
    
    echo "Acceso no permitido"; 
}




?>