<?php
class visualizacao{
    private $espect,$filme;

    function __construct($espect,$filme){
        $this->espect = $espect;
        $this->filme = $filme;
        $this->filme->setViews($this->filme->getViews() + 1);
        $this->espect->setTotAssis($this->espect->getTotAssis() + 1);
    }

    function avaliar(){
        $this->filme->setAvaliacao(5);
    }
    function avalNota($nota){
        $this->filme->setAvaliacao($nota);
    }
    function avalPorc($porc){
        $nova = 0;
        if ($porc <= 20) {
            $nova = 3;
        }elseif ($porc <= 50) {
            $nova = 5;
        }else {
            $nova = 10;
        }
        $this->filme->setAvaliacao($nova);
    }

    function getEspect(){
        return $this->espect;
    }
    function getFilme(){
        return $this->filme;
    }

    function setEspect($espect){
        $this->espect = $espect;
    }
    function setFilme($filme){
        $this->filme = $filme;
    }

}