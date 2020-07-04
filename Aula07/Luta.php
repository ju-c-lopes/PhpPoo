<?php
require_once 'Lutador.php';
class Luta {
   // Atributos
   private $desafiado;
   private $desafiante;
   private $rounds;
   private $aprovada;
   
   // Métodos
   function marcarLuta($l1, $l2){
       if (($l1->getCategoria() === $l2->getCategoria()) && ($l1 != $l2)){
           $this->aprovada = true;
           $this->desafiado = $l1;
           $this->desafiante = $l2;
       }else{
           $this->aprovada = false;
           $this->desafiado = null;
           $this->desafiante = null;          
           }
       }
   
   function lutar() {
       if ($this->aprovada){
           $this->desafiado->apresentar();
           $this->desafiante->apresentar();  
           $vencedor = rand(0, 2);
           switch ($vencedor){
               case 0: // Empate
                   echo "<br/><p>Empate!</p>";
                   $this->desafiado->empatarLuta();
                   $this->desafiante->empatarLuta();
                   break;
               case 1: // Desafiado vence
                   echo "<br/><p>". $this->desafiado->getNome()." venceu</p>";
                   $this->desafiado->ganharLuta();
                   $this->desafiante->perderLuta();
                   break;
               case 2: // Desafiante vence
                   echo"<br/><p>". $this->desafiante->getNome()." venceu</p>";
                   $this->desafiante->ganharLuta();
                   $this->desafiado->perderLuta();                           
                   break;
           }       
       }else{
           echo "<p>Luta não pode acontecer</p>";
       }   
   }
   
   // Métodos especiais
   function getDesafiado() {
       return $this->desafiado;
   }

   function setDesafiado($dd) {
       $this->desafiado = $dd;
   }

   function getDesafiante() {
       return $this->desafiante;
   }

   function getRounds() {
       return $this->rounds;
   }

   function getAprovada() {
       return $this->aprovada;
   }

   function setDesafiante($desafiante) {
       $this->desafiante = $desafiante;
   }

   function setRounds($rounds) {
       $this->rounds = $rounds;
   }

   function setAprovada($aprovada) {
       $this->aprovada = $aprovada;
   }

}
