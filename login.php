<?php
session_start();

//elementos que vienen del archivo "index.php"
$_SESSION['name']= $_POST['nombre'];
$_SESSION['password'] = md5($_POST['pass']);


if($_POST){
    
    if($_SESSION['name'] && $_SESSION['password']){
    
    mysql_connect("localhost", "root", "") or die("No se pudo conectar....");
    mysql_select_db("nueva");
    
    $query = mysql_query("SELECT * FROM usuarios WHERE nombre='".$_SESSION['name']."'");
    $numrows =mysql_num_rows($query);
    
    if($numrows!=0){
        while($row = mysql_fetch_assoc($query)){
            $bdnombre = $row['nombre'];
            $bdpassword = $row['password'];
        }
        if($_SESSION['name']==$bdnombre){
            if($_SESSION['password']==$bdpassword){
                
                
                if($_POST['recuerda']=="on"){
                    
                    $expira = time()+86400;
                    
                    //accionamos la cookie
                    setcookie('nueva', $_SESSION['name'], $expira);
                    
                }
                
                header('location:user.php');
                
            }else{
                echo "Esta password esta incorrecta!!";
            }
        
        }else{
            echo"Este nombre esta incorrecto!!";
        }
    }else{
        echo "Este nombre no esta registrado";
    }   
    
}else{
    
    echo "Completa el login con nombre y password";
        
}

}else{
    echo "Acceso no permitido!!";
    exit;
}



?>