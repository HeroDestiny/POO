<?php

abstract class Pessoa {
    //atributos
    protected $nome, $idade, $sexo;

    //metodos
    public final function fazerAniv(){
        $this->idade ++;
    }
    function __construct($n,$i,$s){
        $this->nome = $n;
        $this->idade = $i;
        $this->sexo = $s;
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
    //set
    function setNome($n){
        $this->nome = $n;
    }
    function setIdade($i){
        $this->idade = $i;
    }
    function setSexo($s){
        $this->sexo = $s;
    }
}