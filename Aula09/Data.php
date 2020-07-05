<?php
class Data {
    private $dia;
    private $mes;
    private $ano;
    private $bissexto = false;
    public $data;
    private $erro = false;
    
    // Metodos DIA
    function getDia() {
        return $this->dia;
    }

    function setDia($d) {
        if($d < 1 || $d > 31){
            echo "<p>Dia invalido<p/>";
            $this->setErro();
        }else{
            $this->dia = $d;
        }
        
    }
        
    // Metodos MES
    function getMes() {
        if ($this->erro == true){
            return $this->erro;
        }else{
            return $this->mes;
        }        
    }

    function setMes($m) {
        if ($m < 1 || $m > 12){
            echo "<p>Mês Inválido<p/>";
            $this->setErro();            
        }else{
            $this->verMes30($m);
            if ($this->erro == false){
                $this->mes = $m;
            }            
        }
    }
    
    // Função ver mês
    function verMes30($m){
        switch($m){
            case 2:
                if ($this->getDia() > 28){
                    $this->verMes2();
                }
                break;
            case 4:
            case 6:
            case 9:
            case 11:
                if ($this->dia == 31){
                    echo "<p>Mês não tem dia 31<p/>";
                    $this->setErro();
                }else{
                    $this->dia = $this->getDia();
                }
                break;            
        }        
    }
    
    private function verMes2(){
        if ($this->getDia() >= 29){
            if ($this->getDia() == 29 && $this->bissexto){
                $this->dia = $this->getDia();
            }else {
                echo "<p>Mês de fevereiro não tem esse dia<p/>";                
                $this->setErro();               
            }
        }
    }
    
    // Metodo ANO
    function getAno() {
        return $this->ano;
    }

    function setAno($a) {
        if ($a % 100 == 0){
            if ($a % 400 == 0){
                $this->bissexto = true;
            }
        }else if($a % 4 == 0){
            $this->bissexto = true;
        }else{
            $this->bissexto = false;
        }
        $this->ano = $a;
    }

    function anularAno() {
        $this->ano = null;
        $this->bissexto = false;
        $this->data = null;
    }
    
    // Método ERRO
    private function setErro() {
        $this->dia = null;
        $this->mes = null;
        $this->anularAno();
        $this->erro = true;
    }
    
    // Construtor
    function __construct($d, $m, $a) {
        $this->setAno($a);
        $this->setDia($d);        
        $this->setMes($m);
        $this->formarData();
        
    }
    
    // Método formar data
    /* Implementação desta função para resolver um erro 
       onde não aceita o numero 8 e 9 com o 0
     */
    function formarData() {
        if ($this->erro == false){
            switch($this->getDia() && $this->getMes()){
                case ($this->getDia() <= 9 && $this->getMes() <= 9):
                    $this->data = "0".$this->getDia()."/0".$this->getMes()."/".$this->getAno();
                    break;
                case $this->getDia() <= 9:
                    $this->data = "0".$this->getDia()."/".$this->getMes()."/".$this->getAno();  
                    break;
                case $this->getMes() <= 9:
                    $this->data = $this->getDia()."/0".$this->getMes()."/".$this->getAno();
                    break;               
                default :
                    $this->data = $this->getDia()."/".$this->getMes()."/".$this->getAno();
                    break;
            }            
        }
    }

}
