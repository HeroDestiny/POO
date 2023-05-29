<?php
require_once 'Pessoa.php';

class Professor extends Pessoa {
    private $esp, $sal;

    //metodos
    function receberAum($aum){
        $this->sal += $aum;

    }
    function __construct($esp,$sal){
        $this->esp = $esp;
        $this->sal = $sal;
    }
    //get
    function getEspc(){
        return $this->esp;
    }
    function getSal(){
        return $this->sal;
    }
    function setEspc($e){
        $this->esp = $e;
    }
    function setSal($s){
        $this->sal = $s;
    }
}