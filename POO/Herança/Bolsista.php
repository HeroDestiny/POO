<?php
require_once 'Aluno.php';

class Bolsista extends Aluno {
    private $bolsa;

    public function RenovarBolsa(){
        echo "Renovado";
    }

    public function pagarMens(){
        echo "Bolsista $this->nome pagou Mensalidade";
    }

    function __construct($b){
        $this->bolsa= $b;
    }

    //get
    function getBolsa(){
        return $this->bolsa;
    }
    //set
    function setBolsa($b){
        $this->bolsa = $b;
    }
}