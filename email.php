<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    
    <form action="" method="post">
       <table border="1" width="25%">
          <tr>
              <td width="10">Para:</td><td><input type="text" name="para" size="20" value="<?php echo $_REQUEST['email']; ?>"></td></tr>
              <tr> <td width="10">Asunto:</td><td><input type="text" name="asunto" size="20"></td></tr>
          
           <tr>
               <td width="10">Mensaje:</td><td><textarea name="mensaje" id="" cols="30" rows="10"></textarea></td>
           </tr>
       </table>
       <p><input type="submit" name="submit" value="enviar email"><p>
        
    </form>
    
    
    <?php 
    //Aqui verificamos si un usuario registrado dio click en submit(Por seguridad)
    if(isset($_REQUEST['submit'])){
        
        $para = $_REQUEST['para'];
        $asunto = $_REQUEST['asunto'];
        $mensaje = $_REQUEST['mensaje'];
        $de = "guilllopez@gmail.com";
        $headers = "From: $de";
        
        if($para && $asunto && $mensaje){
            
            mail($para,$asunto,$mensaje,$headers);
            echo "Tu email ha sido enviado....";
            header("Refresh:4; url=usuarios.php");
        
        }else{
            
            echo "Por favor rellena todos los campos!!!!!";
        }
        
        
    }
    
    ?>
    
</body>
</html>