<?php
require_once 'Controlador.php';
class ControleRemoto implements Controlador {
    // Atributos
    private $canal = [];
    private $volume;
    private $ligado;
    private $tocando;
    
    // Métodos especiais
    function __construct() {
        $this->volume = 50;
        $this->ligado = false;
        $this->tocando = false;
    }
    private function getCanal() {
        return $this->canal;
    }

    private function setCanal($canal){
        $this->canal = $canal;
    }

    private function getVolume() {
        return $this->volume;
    }

    private function getLigado() {
        return $this->ligado;
    }

    private function getTocando() {
        return $this->tocando;
    }

    private function setVolume($volume) {
        $this->volume = $volume;
    }

    private function setLigado($ligado) {
        $this->ligado = $ligado;
    }

    private function setTocando($tocando) {
        $this->tocando = $tocando;
    }

    // Implementação dos métodos
    public function abrirMenu() {
        if ($this->getLigado()){
            echo "<p>-----MENU-----</p>";            
            echo "<br/>Tocando? ". ($this->getTocando()?"SIM":"NÃO");
            echo "<br/>Volume: ". $this->getVolume()." ";
            for ($i=0; $i <= $this->getVolume(); $i+=10){
                echo "<b>|</b>";            
            }
            echo "<br/>";
        }
    }

    public function desligar() {
        $this->setLigado(false);
    }

    public function desligarMudo() {
        if ($this->getLigado() && $this->getVolume() == 0){
            $this->setVolume(50);
        }
    }

    public function fecharMenu() {
        echo "Fechando Menu...";
    }

    public function ligar() {
        $this->setLigado(true);
    }

    public function ligarMudo() {
        if ($this->getLigado() && $this->getVolume() > 0){
            $this->setVolume(0);
        }
    }

    public function maisVolume() {
        if ($this->getLigado()){
            $this->setVolume($this->getVolume() + 5);
        }
    }

    public function menosVolume() {
        if ($this->getLigado()){
            $this->setVolume($this->getVolume() - 5);
        }
    }

    public function pause() {
        if ($this->getLigado() && $this->getTocando()){
            $this->setTocando(false);
        }
    }

    public function play() {
        if ($this->getLigado() && !($this->getTocando())){
            $this->setTocando(true);
        }
    }
}
