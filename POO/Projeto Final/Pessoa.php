<?php
abstract class Pessoa{
    protected $nome, $idade, $sexo, $exp;

    function __construct($nome, $idade, $sexo){
        $this->nome = $nome;
        $this->sexo = $sexo;
        $this->idade = $idade;
        $this->exp = 0;
    }

    function ganharExp(){
        $this->exp++;
    }
    //get
    function getNome(){
        return $this->nome;
    }
    function getIdade(){
        return $this->idade;
    }
    function getSexo(){
        return $this->sexo;
    }
    function getExp(){
        return $this->exp;
    }

    //set
    function setNome($nome){
        $this->nome = $nome;
    }
    function setIdade($idade){
        $this->idade = $idade;
    }
    function setSexo($sexo){
        $this->sexo = $sexo;
    }
    function setExp($exp){
        $this->exp = $exp;
    }
}