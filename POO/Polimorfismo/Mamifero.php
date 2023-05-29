<?php
require_once 'Animal.php';
class Mamifero extends Animal{
    private $corPelo;


    function Locomover(){
        echo "<p>Correndo como o vento</p>";
    }
    function Alimentar(){
        echo "<p>🌾🌾🌾</p>";
    }
    function emitirSom(){
        echo "<p>(╯°□°）╯︵ ┻━┻</p>";
    }

    function getCorPelo(){
        return $this->corPelo;
    }
    function setCorPelo($corPelo){
        $this->corPelo = $corPelo;
    }

}