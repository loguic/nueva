<?php


if(!isset($_SESSION['name'])){
    
    echo "No existe sessíon !!";   
    
}else{
    
    
    $dir = "fotos/".$_SESSION['name'];
    $abrir = opendir($dir);
    
    while(($file=readdir($abrir)) != false){
        
        if($file!="." && $file!=".." && $file!="Thumbs.db"){
            echo "<img border='1' width='50' height='50' src='$dir/$file'>";
        }
    }

echo " <b>" .$_SESSION['name']."</b> Ha iniciado sessión<br />"."<a href='logout.php'>salir de sesión</a><hr />";
include('links.php');
}

?>