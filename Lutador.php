<?php

class Lutador {
    //atributos
    private $nome;
    private $nacionalidade;
    private $idade;
    private $altura;
    private $peso;
    private $categoria;
    private $vitorias;
    private $derrotas;
    private $empates;
    
    //metodos, com base na interface
    function Apresentar(){
        echo"<p>Lutador: " . $this->getNome() . "!";
        echo"<br>Origem: " . $this->getNacionalidade();       
        echo"<br>tem " . $this->getIdade() . " anos e pesa " . $this->getPeso() . "kg";
        echo"<br>tem " . $this->getVitorias() . " vitórias, ";               
        echo $this->getDerrotas() . " derrotas e " . $this->getEmpates() . " empates";
        
    }
    function Status(){
        echo"<p>" . $this->getNome() . " é um peso " . $this->getCategoria();
        echo" e já ganhou " . $this->getVitorias() . " vezes,";
        echo" perdeu " . $this->getDerrotas() . " vezes e ";
        echo" empatou " . $this->getEmpates() . " vezes!";
    }
    function ganharLuta(){
        $this->setVitorias($this->getVitorias() + 1);
    }
    function perderLuta(){
        $this->setDerrotas($this->getDerrotas() + 1);
    }
    function empatarLuta(){
        $this->setEmpates($this->getEmpates() + 1);
    }
    //metodos especiais
    function __construct($no, $na, $id, $al, $pe, $vi, $de, $em) {
        $this->nome = $no;
        $this->nacionalidade = $na;
        $this->idade = $id;
        $this->altura = $al;
        $this->setPeso($pe);
        $this->vitorias = $vi;
        $this->derrotas = $de;
        $this->empates = $em;       
    }
    function getNome(){
       return $this->nome;
    }
    function setNome($no){
       $this->nome = $no;
    }
    function getNacionalidade(){
       return $this->nacionalidade;
    }
    function setNacionalidade($na){
       $this->nacionalidade = $na;
    }
    function getIdade(){
       return $this->idade;
    }
    function setIdade($id){
       $this->idade = $id;
    }
    function getAltura(){
       return $this->altura;
    }
    function setAltura($al){
       $this->altura = $al;
    }
    function getPeso(){
       return $this->peso;
    }
    function setPeso($pe){
       $this->peso = $pe;
       $this->setCategoria();
    }
    function getCategoria(){
       return $this->categoria;
    }
    function setCategoria(){
        if($this->peso < 52.2){
           $this->categoria = "inválido!";
        }else if($this->peso <= 70.3){
           $this->categoria = "Leve";
        }elseif ($this->peso <= 83.9) {
           $this->categoria = "Médio";
        }elseif ($this->peso <= 120.2){
            $this->categoria = "Peso Pesado";
        }else{
            $this->categoria = "inválido!";
        }
    }
    function getVitorias(){
       return $this->vitorias;
    }
    function setVitorias($vitorias){
       $this->vitorias = $vitorias;
    }
    function getDerrotas(){
       return $this->derrotas;
    }
    function setDerrotas($derrotas){
       $this->derrotas = $derrotas;
    }
    function getEmpates(){
       return $this->empates;
    }
    function setEmpates($empates){
       $this->empates = $empates;
    }
}
    














    