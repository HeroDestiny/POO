<?php
require_once 'Animal.php';

class Peixe extends Animal {
    private $corEscama;

    function Locomover(){
        echo "<p>🐠🐠🐠</p>";
    }
    function Alimentar(){
        echo "<p>🌿🌿🌿</p>";
    }
    function emitirSom(){
        echo "<p>🔇🔇🔇</p>";
    }
    function soltarBolha(){
        echo "<p>💦💦💦</p>";
    }

    function getCorEscama(){
        return $this->corEscama;
    }
    function setCorEscama($corEscama){
        $this->corEscama = $corEscama;
    }
}