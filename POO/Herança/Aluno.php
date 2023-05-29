<?php
require_once 'Pessoa.php';

class Aluno extends Pessoa{
    private $matr, $curso;

    //metodo
    public function cancelarMatr(){
        echo "Desmatriculado";
    }
    public function pagarMens(){
        echo "Aluno $this->nome Pagou a Mensalidade";
    }
    
    function __construct($m,$c){
        $this->matr = $m;
        $this->curso = $c;
    }
    //get
    function getMatr(){
        return $this->matr;
    }

    function getCurso(){
        return $this->curso;
    }
    //set
    function setMatr($m){
        $this->matr = $m;
    }
    
    function setCurso($c){
        $this->curso = $c;
    }
}