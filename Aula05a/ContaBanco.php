<?php
class ContaBanco {
    // Atributos
    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;
    
    // Métodos específicos
    public function abrirConta($t) {
        $this->setTipo($t);
        $this->setStatus(true);
        if ($t == "CC"){
            $this->setSaldo(50);
        }elseif($t == "CP"){
            $this->setSaldo(150);
        }
    }
    
    public function fecharConta() {
        if ($this->saldo == 0){
            $this->setStatus(false);
            echo "<p>Conta finalizada com sucesso</p>";
        }elseif ($this->saldo > 0) {
            echo "<p>Conta com dinheiro</p>";
            $this->sacar($this->saldo);
            $this->setStatus(false);
            echo "<p>Conta finalizada com sucesso</p>";
        }else{
            echo "<p>Seu saldo esta negativo em R$ $this->saldo</p>";
        }            
    }
    
    public function depositar($dinheiro) {
        if ($this->getStatus(true)){
            $this->setSaldo($this->getSaldo() + $dinheiro);
            echo "<p>Depósito de R$ $dinheiro efetuado com sucesso</p>";
        }else{
            echo "<p>Conta inexistente</p>";
        }
    }
    
    public function sacar($saque) {
        if ($this->getStatus(true)){
            if ($saque > $this->getSaldo()){
                echo "<p>Saldo Insuficiente para saque</p>";
            }else{
                $this->setSaldo($this->getSaldo() - $saque);
                echo "<p>Saque de R$ $saque efetuado com sucesso</p>";
            }
        }else{
            echo "<p>Impossivel sacar de uma conta não aberta</p>";
        }
    }
    
    public function pagarMensal() {
        $v = 0;
        if ($this->getTipo("CC")){
            $v = 12;
        }else{
            $v = 20;
        }
        if($this->getStatus(true)){
            if ($this->getSaldo() > $v){
                $this->setSaldo($this->getSaldo() - $v);
                echo "<p>Pagamento de $v efetuado com sucesso</p>";
            }else{
                echo "<p>Você precisa adicionar dinheiro a sua conta para efetuar o pagamento</p>";
            }
        }else{
            echo "<p>Impossivel pagar, conta inativa</p>";
        }
    }
    
    // Métodos especiais
    
        // Método construtor
    public function __construct() {
        $this->saldo = 0;
        $this->status = false;
        echo "<p>Conta criada com sucesso</p>";
    }
    
        // Setter e Getter NumConta
    function setNumConta($n) {
        $this->numConta = $n;
    }
    
    function getNumConta() {
        return $this->numConta;
    }    
    
        // Setter e Getter Tipo
    function setTipo($t) {
        $this->tipo = $t;
    }

    function getTipo() {
        return $this->tipo;
    }
    
        // Setter e Getter Dono
    function setDono($d) {
        $this->dono = $d;
    }
    
    function getDono() {
        return $this->dono;
    }
    
        // Setter e Getter Saldo
    function setSaldo($sd) {
        $this->saldo = $sd;
    }
    
    function getSaldo() {
        return $this->saldo;
    }

        // Setter e Getter Status
    function setStatus($s) {
        $this->status = $s;
    }
    
    function getStatus() {
        return $this->status;
    }
}
