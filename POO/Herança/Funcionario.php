<?php
require_once 'Pessoa.php';

class Funcionario extends Pessoa {
    //atributos
    private $setor, $trab;
    
    //metodos
    public function mudarTrab(){
        echo "voce mudou de Trabalho";
    }

    function __construct($s,$t){
        $this->setor = $s;
        $this->trab = $t;
    }

    //gets
    function getSetor(){
        return $this->setor;
    }
    function getTrab(){
        return $this->trab;
    }
    //sets
    function setSetor($s){
        $this->setor = $s;
    }
    function setTrab($t){
        $this->trab = $t;
    }
}