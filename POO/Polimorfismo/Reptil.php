<?php
require_once 'Animal.php';

class Reptil extends Animal {
    private $corEscama;

    function Locomover(){
        echo "<p>Escorrega!</p>";
    }
    function Alimentar(){
        echo "<p>🐭🐭🐭</p>";
    }
    function emitirSom(){
        echo "<p>Faz o S</p>";
    }

    function getCorEscama(){
        return $this->corEscama;
    }
    function setCorEscama($corEscama){
        $this->corEscama = $corEscama;
    }
}