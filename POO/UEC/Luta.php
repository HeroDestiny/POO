<?php
require_once 'Lutador.php';
class Luta{
    //atributos
    private $desafiado;
    private $desafiante;
    private $rounds;
    private $aprovada;

    //metodos
    public function marcarLuta($l1, $l2) {
        if ($l1->getCategoria() === $l2->getCategoria() && ($l1 != $l2)){
            $this->aprovada = true;
            $this->desafiado = $l1;
            $this->desafiante = $l2;
        } else {
            $this->aprovada = false;
            $this->desafiado = null;
            $this->desafiante = null;
        }
    }
    public function lutar(){
        if ($this->aprovada){
            $this->desafiado->apresentar();
            $this->desafiante->apresentar();
            $vencedor = rand(0,2);
            switch ($vencedor) {
                case 0: // Empate
                    echo "<p>Empate!</p>";
                    $this->desafiado->empatarLuta();
                    $this->desafiante->empatarLuta();
                    break;
                case 1: // Desafiado vence
                    echo "<p> " . $this->desafiado->getNome() . " Venceu!</p>";
                    $this->desafiado->ganharLuta();
                    $this->desafiante->perderLuta();
                    break;
                case 2: // Desafiante vence
                    echo "<p>" . $this->desafiante->getNome() ." Venceu!</p>";
                    $this->desafiado->perderLuta();
                    $this->desafiante->ganharLuta();
                    break;
            }
        }else {
            echo "<p>nao havera luta</p>";
        }
    }

    //metodos especias
    function getDesafiado(){
        return $this->desafiado;
    }
    function getDesafiante(){
        return $this->desafiante;
    }
    function getRounds(){
        return $this->rounds;
    }
    function getAprovada(){
        return $this->aprovada;
    }
    function setDesafiado($desafiado){
        $this->desafiado = $desafiado;
    }
    function setDesafiante($desafiante){
        $this->desafiante = $desafiante;
    }
    function setRounds($rounds){
        $this->rounds = $rounds;
    }
    function setAprovada($aprovada){
        $this->aprovada = $aprovada;
    }
}