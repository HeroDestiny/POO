<?php
require_once 'AcoesVideo.php';
class Video implements AcoesVideo{
    private $titulo, $aval, $views, $curt, $repr;

    //construtor
    public function __construct($titulo){
        $this->titulo = $titulo;
        $this->aval = 0;
        $this->views = 0;
        $this->curt = 0;
        $this->repr = false;
    }
    //get
    function getTitulo(){
        return $this->titulo;
    }
    function getAvalicacao(){
        return $this->aval;
    }
    function getViews(){
        return $this->views;
    }
    function getCurtidas(){
        return $this->curt;
    }
    function getRepr(){
        return $this->repr;
    }
    //set
    function setTitulo($titulo){
        $this->titulo = $titulo;
    }
    function setAvaliacao($aval){
        $media = ($this->aval + $aval) / $this->views;
        $this->aval = $media;
    }
    function setViews($views){
        $this->views = $views;
    }
    function setCurtidas($curt){
        $this->curt = $curt;
    }
    function setRepr($repr){
        $this->repr =$repr;
    }

    //interfaces
    public function play(){
        $this->repr = true;
    }
    public function pause(){
        $this->repr = false;
    }
    public function like(){
        $this->curt++;
    }
}