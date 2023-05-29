<?php
//require_once '';
class Pessoa{
    private $nome ,$idade ,$sexo;


    function fazerAniver(){
        $this->setIdade($this->getIdade() + 1);
    }

    function __construct($nome, $idade, $sexo){
        $this->nome = $nome;
        $this->idade = $idade;
        $this->sexo = $sexo;
    }
    
    //gets
    function getNome(){
        return $this->nome;
    }
    function getIdade(){
        return $this->idade;
    }
    function getSexo(){
        return $this->sexo;
    }
    //sets
    function setNome($nome){
        $this->nome = $nome;
    }
    function setIdade($idade){
        $this->idade = $idade;
    }
    function setSexo($sexo){
        $this->sexo = $sexo;
    }

}