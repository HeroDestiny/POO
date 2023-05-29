<?php
class Lutador
{
    //atributos
    private $nome;
    private $nacionalidade;
    private $idade, $altura, $peso;
    private $categoria, $vitorias, $derrotas, $empates;

    //metodos
    function apresentar()
    {
        echo "<br>";
        echo "<br>Lutador: " . $this->getNome();
        echo "<br>Origem: " . $this->getNacionalidade();
        echo "<br>Idade: " . $this->getIdade();
        echo "<br>Pesa: " . $this->getPeso();
        echo "<br>Vitorias: " . $this->getVitorias();
        echo "<br>Derrotas: " . $this->getDerrotas();
        echo "<br>Empates: " . $this->getEmpates();
    }
    function status()
    {
        echo "<br>";
        echo "<br>Nome: " . $this->getNome();
        echo "<br>Categoria: " . $this->getCategoria();
        echo "<br>Vitorias: " . $this->getVitorias();
        echo "<br>Derrotas: " . $this->getDerrotas();
        echo "<br>Empates: " . $this->getEmpates();
    }
    function ganharLuta()
    {
        $this->setVitorias($this->getVitorias() + 1);
    }
    function perderLuta()
    {
        $this->setDerrotas($this->getDerrotas() + 1);
    }
    function empatarLuta()
    {
        $this->setEmpates($this->getEmpates() + 1);
    }

    //metodos especiais
    function __construct($no, $na, $id, $al, $pe, $vi, $de, $em)
    {
        $this->nome = $no;
        $this->nacionalidade = $na;
        $this->idade = $id;
        $this->altura = $al;
        $this->setPeso($pe);
        $this->vitorias = $vi;
        $this->derrotas = $de;
        $this->empates = $em;
    }
    //gets
    function getNome()
    {
        return $this->nome;
    }
    function getNacionalidade()
    {
        return $this->nacionalidade;
    }
    function getIdade()
    {
        return $this->idade;
    }
    function getAltura()
    {
        return $this->altura;
    }
    function getPeso()
    {
        return $this->peso;
    }
    function getCategoria()
    {
        return $this->categoria;
    }
    function getVitorias()
    {
        return $this->vitorias;
    }
    function getDerrotas()
    {
        return $this->derrotas;
    }
    function getEmpates()
    {
        return $this->empates;
    }
    //sets
    function setNome($nome)
    {
        $this->nome = $nome;
    }
    function setNacionalidade($nacionalidade)
    {
        $this->nacionalidade = $nacionalidade;
    }
    function setIdade($idade)
    {
        $this->idade = $idade;
    }
    function setAltura($altura)
    {
        $this->altura = $altura;
    }
    function setPeso($peso)
    {
        $this->peso = $peso;
        $this->setCategoria();
    }

    private function setCategoria()
    {
        if ($this->peso < 52.2) {
            $this->categoria = "inválido";
        } elseif ($this->peso <= 70.3) {
            $this->categoria = "Leve";
        } elseif ($this->peso <= 83.9) {
            $this->categoria = "Medio";
        } elseif ($this->peso <= 120.2) {
            $this->categoria = "Pesado";
        } else {
            $this->categoria = "Invalido";
        }
    }

    function setVitorias($vitorias)
    {
        $this->vitorias = $vitorias;
    }
    function setDerrotas($derrotas)
    {
        $this->derrotas = $derrotas;
    }
    function setEmpates($empates)
    {
        $this->empates = $empates;
    }

    
}