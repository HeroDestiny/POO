<?php
require_once 'Pessoa.php';
class Gafanhoto extends Pessoa{
    private $login, $totAssis;

    function __construct($nome,$idade,$sexo,$login){
        parent::__construct($nome, $idade, $sexo);
        $this->login = $login;
        $this->totAssis = 0;        
    }

    function assisMaisUm(){
        $this->totAssis++;
    }

    //get
    function getLogin(){
        return $this->login;
    }
    function getTotAssis(){
        return $this->totAssis;
    }
    //set
    function setLogin($login){
        $this->login =$login;
    }
    function setTotAssis($totAssis){
        $this->totAssis = $totAssis;
    }

}