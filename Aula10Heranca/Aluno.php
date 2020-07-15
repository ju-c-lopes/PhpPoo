<?php
require_once 'Pessoa.php';
class Aluno extends Pessoa{
    // Atributos
    private $matricula;
    private $curso;
    
    public function cancelarMat() {
        echo "<p>Matrícula será cancelada</p>";        
    }
    
    public function getMatricula() {
        return $this->matricula;
    }

    public function getCurso() {
        return $this->curso;
    }

    public function setMatricula($matricula) {
        $this->matricula = $matricula;
    }

    public function setCurso($curso) {
        $this->curso = $curso;
    }


}
