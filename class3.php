<?php

$nombre = "loguic";
$email ="l@";

class Nombre extends Exception{}
class Email extends Exception{}

try{
    if($nombre==""){
        throw new Nombre("Tienes que poner un nombre");
    }elseif($email==""){
        throw new Email("Tienes que poner un email");
    }else{
        echo "Valores enviados con exito";
    }
    
    
}catch(Nombre $n){
    
    echo "ERROR ".$n->getMessage();

}catch(Email $e){
    echo "ERROR ".$e->getMessage();
}






?>