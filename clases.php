<?php

class Miclase{
    public $hola1 = "Variable public";
    protected $hola2 = "Variable protected";
    private $hola3 = "Variavle private";
       
}

class Miclase2 extends Miclase{
    
    public function resultado(){
        
        echo $this->hola2;
    }
    
}

$objMiclase2 = new Miclase2();
$objMiclase2->resultado();

?>