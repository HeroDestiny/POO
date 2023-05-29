<?php
require_once 'Lobo.php';

class Cachorro extends Lobo{
    function emitirSom(){
        echo "<p>roof! roof!</p>";
    }
    function ReagirFrase($frase){
        if ($frase == "Toma Comida" || $frase == "Olá") {
            echo "<p>Abanar Rabo</p>";
        } else {
            echo "<p>Rosnar</p>";
        }
    }
    function reagirIdade($idade,$peso){
        if ($idade < 5) {
            if ($peso < 10) {
                echo "<p>Abanar rabo</p>";
            } else {
                echo "<p>Latir</p>";
            }
            
        } else {
            if ($peso < 10) {
                echo "<p>Rosnar</p>";
            } else {
                echo "<p>Ignorar</p>";
            }
            
        }
        
    }
}