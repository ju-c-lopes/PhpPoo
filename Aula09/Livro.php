<?php
require_once 'Pessoa.php';
require_once 'Publicacao.php';
class Livro implements Publicacao{
    // Atributos livros
    private $titulo;
    private $autor;
    private $totalPaginas;
    private $aberto;    
    private $marcador;
    private $pagAtual;
    private $leitor;
    private $lido;
    
    // Métodos especiais
    function __construct($tit, $aut, $totPg, $lt) {
        $this->titulo = $tit;
        $this->autor = $aut;
        $this->pagAtual= 0;
        $this->totalPaginas = $totPg;        
        $this->fechar();
        $this->leitor = $lt;
    }
    
    function getTitulo() {
        return $this->titulo;
    }

    function getAutor() {
        return $this->autor;
    }

    function getTotalPaginas() {
        return $this->totalPaginas;
    }

    function getAberto() {
        return $this->aberto;
    }

    function getLeitor() {
        return $this->leitor;
    }

    function getMarcador() {
        return $this->marcador;
    }
    
    function getLido() {
        return $this->lido;
    }
    
    function getPagAtual() {
        return $this->pagAtual;
    }
        
    // Métodos
    function mostrarDetalhes(){
        echo "<hr/>Livro ".$this->titulo." escrito por ".$this->autor;
        echo "<br/> Páginas: ".$this->totalPaginas." Página Atual: ".$this->pagAtual;
        echo "<br/> Sendo lido por ".$this->leitor->getNome();
    }
    
    public function abrir() {
        $this->pagAtual = $this->marcador[($this->getLido()-1)];
        $this->aberto = true;
    }
    
    public function fechar() {        
        $this->marcarPag();
        $this->aberto = false;
        
    }
    
    public function folhear($pg) {
        if ($pg > $this->totalPaginas){
            $this->pagAtual = 0;            
        }else{
            $this->pagAtual = $pg;
            $this->marcarPag();
            $this->abrir();
        }
    }

    public function avancarPag() {
        if ($this->pagAtual == $this->totalPaginas){
            echo "<h3><p>Livro lido por completo</h3></p>";
        }else{
            $this->pagAtual++;
        }
    }
    
    public function voltarPag() {
        if ($this->pagAtual == 0){
            echo "<p><h3>Reler é uma ótima maneira de absorver mais o conteúdo</h3></p>";
        }else{
            $this->pagAtual--;
        }
    }

    public function marcarPag() {
        $this->getLido();
        $this->marcador[$this->getLido()] = $this->getPagAtual();
        $this->lido++;
    }
    
}