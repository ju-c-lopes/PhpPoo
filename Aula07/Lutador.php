<?php
class Lutador {
    // Atributos
    private $nome;
    private $nacionalidade;
    private $idade;
    private $altura;
    private $peso;
    private $categoria;
    private $vitorias;
    private $derrotas;
    private $empates;
    
    // Métodos
    public function apresentar() {
        echo "<p>------------------------------------</p>";
        echo "<p>CHEGOU A HORA! O lutador: ".$this->getNome()."</p>";
        echo "<p>Origem: ". $this->getNacionalidade()."</p>";
        echo "<p>Tem ". $this->getIdade()." anos</p>";
        echo "<p>". $this->getAltura()."m de altura</p>";
        echo "<p>Pesando ". $this->getPeso()." kg</p>";
        echo "<p>Ganhou ". $this->getVitorias()." partidas</p>";
        echo "<p>Perdeu ". $this->getDerrotas()." partidas</p>";
        echo "<p>Empatou ". $this->getEmpates()." partidas</p>";
    }
    
    public function status() {
        echo "<p>------------------------------------</p>";
        echo $this->getNome(). "<br/>";
        echo "Peso ". $this->getCategoria()."<br/>";
        echo $this->getVitorias()." vitórias<br/>";
        echo $this->getDerrotas()." derrotas<br/>";
        echo $this->getEmpates()." empates<br/>";
    }
    
    public function ganharLuta() {
        $this->setVitorias($this->getVitorias() + 1);
    }
    
    public function perderLuta() {
        $this->setDerrotas($this->getDerrotas() + 1);
    }
    
    public function empatarLuta() {
        $this->setEmpates($this->getEmpates() + 1);
    }
    
    // Métodos especiais
    function __construct($no,
                         $na,
                         $id,
                         $al,
                         $pe,
                         $vi,
                         $de,
                         $em) {
        
        $this->setNome($no);
        $this->setNacionalidade($na);
        $this->setIdade($id);
        $this->setAltura($al);
        $this->setPeso($pe);
        $this->setVitorias($vi);
        $this->setDerrotas($de);
        $this->setEmpates($em);
    }
    
    function getNome() {
        return $this->nome;
    }

    function getNacionalidade() {
        return $this->nacionalidade;
    }

    function getIdade() {
        return $this->idade;
    }

    function getAltura() {
        return $this->altura;
    }

    function getPeso() {
        return $this->peso;
    }

    function getCategoria() {
        return $this->categoria;
    }

    function getVitorias() {
        return $this->vitorias;
    }

    function getDerrotas() {
        return $this->derrotas;
    }

    function getEmpates() {
        return $this->empates;
    }

    function setNome($no) {
        $this->nome = $no;
    }

    function setNacionalidade($na) {
        $this->nacionalidade = $na;
    }

    function setIdade($id) {
        $this->idade = $id;
    }

    function setAltura($al) {
        $this->altura = $al;
    }

    function setPeso($pe) {
        $this->peso = $pe;
        $this->setCategoria();
    }

    private function setCategoria() {
        if ($this->peso < 52.2 || $this->peso > 120.2){
            $this->categoria = "Inválido";
        }elseif($this->peso <= 70.3){
            $this->categoria = "Leve";            
        }elseif($this->peso <= 83.9){
            $this->categoria = "Médio";            
        }else{
            $this->categoria = "Pesado";
        }
    }

    function setVitorias($vi) {
        $this->vitorias = $vi;
    }

    function setDerrotas($de) {
        $this->derrotas = $de;
    }

    function setEmpates($em) {
        $this->empates = $em;
    }

}
