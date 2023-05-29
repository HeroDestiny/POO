<?php
require_once 'Animal.php';

class Ave extends Animal{
    private $corPena;

    function Locomover(){
        echo "<p>Voar! Voar! Subir! Subir!</p>";
    }
    function Alimentar(){
        echo "<p>🍗🍗🍗</p>";
    }
    function emitirSom(){
        echo "<p>༼ つ ◕_◕ ༽つ</p>";
    }
    function fazerNinho(){
        echo "<p>Ninho Feito!</p>";
    }

    function getCorPena(){
        return $this->corPena;
    }
    function setCorPena($corPena){
        return $this->corPena = $corPena;
    }
}