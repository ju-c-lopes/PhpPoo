<?php
class Lanterna {
    public $cor;
    private $pilha;
    public $carga;
    protected $lanterna;
    public $carga_lanterna;
    public $botao;
    
    public function Lanterna($c) {
        $this->pilha = 3;
        $this->carga = 100;
        $this->cor = $c;
        $this->lanterna = true;
        $this->carga_lanterna = 100;
        $this->botao = false;
    }
    
    public function acender(){
        $this->botao = true;
        if ($this->carga == 0){
            echo "Verifique as pilhas se tem carga<br/>";
        }else{
            if ($this->lanterna == 0){
                echo "A lanterna está queimada";
            }else{
                echo "Lanterna acesa<br/>";
                $this->carga -= 2;
                $this->carga_lanterna -= 1;
            }
            $this->botao = false;
        }
    }
    
    public function getCarga($cg) {        
        if ($this->carga == 0){
            $this->carga = $cg;
        }
        
    }
}
