<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);
session_start();


if(isset($_SESSION['name']) || isset($_COOKIE['nueva'])){

if(!isset($_SESSION['name']) || isset($_COOKIE['nueva'])){
    
   $_SESSION['name']=$_COOKIE['nueva'];    
    
}
    
    
    $dir = "fotos/".$_SESSION['name'];
    $abrir = opendir($dir);
    
    while(($file=readdir($abrir)) != false){
        
        if($file!="." && $file!=".." && $file!="Thumbs.db"){
            echo "<img border='1' width='50' height='50' src='$dir/$file'>";
        }
    }

echo " <b>" .$_SESSION['name']."</b> Ha iniciado sessión<br />"."<a href='logout.php'>salir de sesión</a><hr />";
include('links.php');
}else{
    
    echo "Acceso no permitido!!!!";
}

?>