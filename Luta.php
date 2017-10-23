<?php
require_once 'Lutador.php';
class Luta {
    private $desafiante;
    private $desafiado;
    private $rounds;
    private $aprovada;
    
    function marcarLuta($L1, $L2){
        if($L1->getCategoria() === $L2->getCategoria() && ($L1 != $L2)){
            $this->aprovada = true;
            $this->desafiado = $L1;
            $this->desafiante = $L2;
        }else{
            $this->aprovada = false;
            $this->desafiado = null;
            $this->desafiante = null;
        }
    }
    function lutar(){
        if($this->aprovada){
           $this->desafiado->apresentar();
           $this->desafiante->apresentar();
           $vencedor = rand(0, 2);//rand = aleatório, e switch para testar isso!
           switch ($vencedor){
               case 0: //empate
                   $this->desafiado->empatarLuta();
                   $this->desafiante->empatarLuta;
                   break;
               case 1: //desafiado vence
                   echo"<p>". $this->desafiado->getNome()." venceu!";
                   $this->desafiado->ganharLuta();
                   $this->desafiante->perderLuta();           
                   break;
               case 2: //desafiante vence
                   echo"<p>". $this->desafiante->getNome()." venceu!";
                   $this->desafiante->ganharLuta();
                   $this->desafiado->perderLuta();   
                   break;
           }
        }else{
            echo "<p>não vai rolar a luta</p>";
        }
    }
    function getDesafiante(){
        return $this->desafiante;
    }
    function setDesafiante($desafiou){
        $this->desafiante = $desafiou;
    }
    function setDesafiado($desafiado){
        $this->desafiado = $desafiado;
    }
    function getDesafiado(){
        return $this->desafiado;
    }
    function getRounds() {
        return $this->rounds;
    }
    function setRounds($rounds) {
        $this->rounds = $rounds;
    }
    function getAprovada() {
        return $this->aprovada;
    }
    function setAprovada($aprovada) {
        $this->aprovada = $aprovada;
    }

    

    


}
