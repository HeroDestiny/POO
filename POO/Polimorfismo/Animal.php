<?php

abstract class Animal{
    protected $peso, $idade, $membros;

    abstract function Locomover();
    abstract function Alimentar();
    abstract function emitirSom();

    function getPeso(){
        return $this->peso;
    }
    function getIdade(){
        return $this->idade;
    }
    function getMembros(){
        return $this->membros;
    }

    function setPeso($peso){
        $this->peso = $peso;
    }
    function setIdade($idade){
        $this->idade = $idade;
    }
    function setMembros($membros){
        $this->membros = $membros;
    }

}