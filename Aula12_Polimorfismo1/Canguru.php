<?php
require_once 'Mamifero.php';
class Canguru extends Mamifero {
    public function locomover() {
        echo "<p>Saltando</p>";
    }
    public function usarBolsa() {
        echo "<p>Carregando filhote na bolsa</p>";
    }
}
