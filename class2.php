<?php

class Prueba{
    
    // el constructor se dispara inmediatamentre a penas creamos el objeto "$x"
    function __construct($a, $b){
        
        echo "Como estan $a y $b? <br/>";
    }
    
    //creamos el constructor para detener al constructor
    function __destruct(){
        
        echo "Constructor detenido";
    }
}

$x = new Prueba("Alice","Cristel");
unset($x);

?>