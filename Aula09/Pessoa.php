<?php
require_once 'Data.php';
require_once 'Idade.php';
class Pessoa {
    private $nome;
    private $idade;
    private $sexo;
    private $dataNasc;
    private $niver;    

    // Métodos especiais
    function __construct($n, $d, $m, $a, $sex) {
        $this->nome = $n;
        $this->setDataNasc($d, $m, $a);
        $this->setIdade($a, $m);
        $this->sexo = $sex;
        $this->fazerAniversario();
    }
    
    function getNome() {
        return $this->nome;
    }

    function getIdade() {
        return $this->idade;
    }

    function getSexo() {
        return $this->sexo;
    }
    
    function getDataNasc() {
        return $this->dataNasc;
    }

    function setNome($n) {
        $this->nome = $n;
    }

    function setIdade($a, $m) {
        $i = new Idade($a, $m);
        $this->idade = $i->getId();
        
    }

    function setSexo($sex) {
        $this->sexo = $sex;
    }
    
    function setData() {
        $this->data = date("d/m");
    }
    
    function getNiver() {
        return $this->niver;
    }
    
    /* Implementação desta função para resolver um erro 
       onde não aceita o numero 8 e 9 com o 0
     */
    function setNiver($d, $m) {
        switch($d && $m){
                case ($d<= 9 && $m <= 9):
                    $this->niver = "0".$d."/0".$m;
                    break;
                case $d <= 9:
                    $this->niver = "0".$d."/".$m;  
                    break;
                case $m <= 9:
                    $this->niver = $d."/0".$m;
                    break;               
                default :
                    $this->niver = $d."/".$m;
                    break;
            }
    }
            
    function setDataNasc($d, $m, $a) {
        $dt = new Data($d, $m, $a);
        $this->dataNasc = $dt->data;
        $this->setNiver($d, $m);
    }
        
    // Métodos
    function fazerAniversario(){
        if ($this->niver == date("d/m")){
            echo "<p><h2>FELIZ ANIVERSÁRIO ".$this->getNome()."</h2></p>";
        }
    }

}


