<?php
class Caneta {
    public $modelo;
    private $cor;
    private $ponta;
    private $tampada;
    
    /* o método construtor também pode ser escrito como abaixo usando o nome da classe,
       funcionará da mesma forma como __construct()
    
    public function Caneta() {
        $this->cor = "Azul";
        $this->tampar();
    }*/
    public function __construct($m, $c, $p) {
        $this->setModelo($m); //pode ser escrito $this->modelo = $m;
        $this->cor = $c;
        $this->ponta = $p;
        $this->tampar();
    }
    
    public function tampar() {
        $this->tampada = true;
    }
    
    public function getModelo() {
        return $this->modelo;
    }
    public function setModelo($m) {
        $this->modelo = $m;
    }
    public function getPonta() {
        return $this->ponta;
    }
    public function setPonta($p) {
        $this->ponta = $p;
    }
}
