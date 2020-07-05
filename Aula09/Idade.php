<?php
class Idade {
    private $somador;
    private $bissexto;
    private $anoDado;
    private $anoAtual;    
    private $mesDado;
    private $mesAtual;    
    private $guardaAno;
    private $guardaMes;
    private $dias;
    public $id = 0;
            
    private function somar(){
        if ($this->getMesDado() < 1 || $this->getMesDado() > 12){
            echo "ERRO<br/>";
        }else{
            switch($this->getMesDado()){
                case 4:
                case 6:
                case 9:
                case 11:
                    $this->somador = 30;
                    break;
                case 2:
                    $this->verMes2($this->getMesDado());
                    break;
                default :
                    $this->somador = 31;
                    break;        
            }
        }
    }

    private function verMes2() {
        $this->calcularBissexto();
        if ($this->getAnoDado() && $this->bissexto){
            $this->somador = 29;
        }else {
            $this->somador = 28;
        }        
    }
    
    private function calcularBissexto() {
        $this->getAnoDado();
        if ($this->getAnoDado() % 100 == 0){
            if ($this->getAnoDado() % 400 == 0){
                $this->bissexto = true;
            }
        }else if($this->getAnoDado() % 4 == 0){
            $this->bissexto = true;
        }else{
            $this->bissexto = false;
        }        
    }
    
    private function calc() {        
        $this->guardaAno = $this->anoDado;
        $this->guardaMes = $this->mesDado;
        for ($this->anoDado; $this->anoDado <= $this->anoAtual; $this->anoDado++){
            $this->calcularBissexto();
            $this->calcMes();
            $this->mesDado = 1;
        }
        $this->anoDado = $this->guardaAno;
        $this->mesDado = $this->guardaMes;
        $this->calcIdade();
    }
    
    private function calcMes() {
        if ($this->anoDado == $this->anoAtual){
            for ($this->mesDado; $this->mesDado <= $this->mesAtual; $this->mesDado++){
                $this->somar();
                $this->dias += $this->somador;
            }
        }else{
            for ($this->mesDado; $this->mesDado <= 12; $this->mesDado++){                
                $this->somar();
                $this->dias += $this->somador;
            }
        }
    }
    
    private function calcIdade() {
        $this->guardaAno = $this->anoAtual;        
            for ($this->anoAtual; $this->anoAtual > $this->anoDado; $this->anoAtual--){            
                if($this->anoAtual && $this->bissexto){
                    $this->dias -= 366;
                }else{
                    $this->dias -= 365;
                }
                $this->id++; 
            }        
        $this->anoAtual = $this->guardaAno;        
    }
    
    // Getters and Setters
    private function getAnoDado() {
        return $this->anoDado;
    }

    private function getMesDado() {
        return $this->mesDado;
    }

    private function setAnoDado($a) {
        $this->anoDado = $a;
    }

    private function setMesDado($m) {
        $this->mesDado = $m;
    }
    
    function getId() {
        return $this->id;
    }

    private function setAnoAtual() {
        //$this->anoAtual = 2016;
        $this->anoAtual = date("Y");
    }

    private function setMesAtual() {
        //$this->mesAtual = 12;
        $this->mesAtual = date("m");
    }
    
    function __construct($a, $m) {
        $this->setAnoDado($a);
        $this->setMesDado($m);
        $this->setAnoAtual();
        $this->setMesAtual();
        $this->calc();
    }

}
