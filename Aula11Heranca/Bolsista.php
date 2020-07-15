<?php
require_once 'Aluno.php';
class Bolsista extends Aluno {
    private $bolsa;
    public function renovarBolsa() {
        echo "<p>Bolsa Renovada</p>";
    }
    function getBolsa() {
        return $this->bolsa;
    }

    function setBolsa($bolsa): void {
        $this->bolsa = $bolsa;
    }
    
    public function pagarMens() {
        echo "<p>$this->nome é bolsista! Então paga com desconto!</p>";
    }


}
