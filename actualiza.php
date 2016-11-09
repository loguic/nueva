<?php   
session_start();



if(isset($_POST['submit'])){

    //nos permite controlar el archivo
$mypic = $_FILES['nuevafoto']['name'];
$temp = $_FILES['nuevafoto']['tmp_name'];
$type = $_FILES['nuevafoto']['type'];
    
$id = $_REQUEST['id'];
$nombre = $_REQUEST['nuevonombre'];
$email = $_REQUEST['nuevoemail'];
$password = $_REQUEST['nuevapassword'];

    if($nombre && $email && $password){
        
        //para validar un email valido
        if(preg_match('#^[\w.-]+@[\w.-]+\.[a-zA-Z]{2,6}$#', $email )){
            
            if(strlen($password)>4){
                                            
                mysql_connect("localhost", "root", "") or die("No se pudo conectar....");
                mysql_select_db("nueva");

                mysql_query("UPDATE usuarios SET nombre='$nombre',email='$email' WHERE id='$id'");
                $md5 = md5($password);
                
                mysql_query("UPDATE usuarios SET password='$md5' WHERE id='$id'");
                
                if(($type=="image/jpeg") || ($type=="image/jpg") || ($type=="image/bmp")){
                    
                    //Este procedimiento borra el archivo antiguo
                    $dir = "fotos/".$_SESSION['name'];
                    $files = 0;    
                    $handle = opendir($dir);
                    while(($file = readdir($handle))!=false){
                        
                        if($file!="." && $file!=".." && $file!="Thumbs.db"){
                            
                            unlink($dir."/".$file);
                            $files++;
                        }
                        
                    }
                    
                    closedir($handle);
                    sleep(1);
                    rename("fotos/".$_SESSION['name']."", "fotos/$nombre");                    
                    move_uploaded_file($temp, "fotos/$nombre/$mypic");
                    
                    echo "Los datos han sido actualizado con exitos";
                    header("Refresh:3; url=logout.php");
                    
                    
                    
                }else{
                    
                    echo "La foto tiene que ser de tipo jpg, jpeg y bmp, de 50kb !!!";
                }

                          
                
            }else{
                
                echo "El password debe tener mas de 4 caracteres!!";
            }
            
        }else{
            
            echo "Escribe un email válido!!";
            
        }
    
    }else{
        
        
        echo "Por favor completa el formulário!!";
    }




}else{
    
    echo "Acceso denegado 7!!";
    
}


?>