<?php 

$mypic = $_FILES['upload']['name'];
$temp = $_FILES['upload']['tmp_name'];
$type = $_FILES['upload']['type'];



$name = $_POST['nombre'];
$email = $_POST['email'];	
$password = $_POST['pass'];
$cpassword = $_POST['cpass'];


	if($name && $email && $password && $cpassword){
        
        //para validar un email valido
        if(preg_match('#^[\w.-]+@[\w.-]+\.[a-zA-Z]{2,6}$#', $email )){
        
        if(strlen($password)>3){
            
        
        
        if($password==$cpassword){
            
        
		  mysql_connect("localhost", "root", "") or die("No se pudo conectar....");
		  mysql_select_db("nueva");
        
            $usuario = mysql_query("SELECT nombre FROM usuarios WHERE nombre='$name'");
            //contamos el numero de usuarios con el mismo nombre
            $contar = mysql_num_rows($usuario);
            
            $remail = mysql_query("SELECT email FROM usuarios WHERE email='$email'");
            $checkemail = mysql_num_rows($remail);
        
            
            
            if($checkemail!=0){
                    
                    echo "<p>Email ya existe, por favor ingrese otro email";
            }else{
            
                //verificamos si existe ya el usuario
                if($contar!=0){
                
                    echo "<p>Nombre ya existe, por favor escoge otro nombre";
                
                
                            
            
                }else{
                    
                    if(($type=="image/jpeg") || ($type=="image/jpg") || ($type=="image/bmp") ){
                        
                        
                        
                        $directory = "./fotos/$name/";
                        mkdir($directory, 0777, true);
                        
                        move_uploaded_file($temp, "fotos/$name/$mypic");
                        
                        echo "Tu foto de perfil:<p><img border='1' width='50' height='50' src='fotos/$name/$mypic'><p>";
                        
                        $passwordmd5 = md5($password);
        
                        mysql_query("INSERT INTO usuarios(nombre,email,password) VALUES('$name','$email','$passwordmd5')");

                        $registro = mysql_affected_rows();

                        echo "Te has registrado con exito!!"."<a href='index.php'>Haz login</a>";
                    }else{
                        echo "El archivo no es valido.....";
                    }
                }
                
            }
        }else{
            echo"La password no coincide!!";
            }
            
        }else{
            
            echo "Tu password es demaciada pequeña!!";
        }
    
        }else{
            
            echo"Tu email no es valido";
        }
    
    }else{

		echo "Por favor completa el formulario.....";

	}


    

    
 ?>