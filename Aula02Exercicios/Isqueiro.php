<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Isqueiro
 *
 * @author Juliano
 */
class Isqueiro {
    var $cor;
    var $carga;
    var $riscador;
    var $marca;
    
    function Acender(){
        if ($this->riscador > 0){
            echo "Gire a roda do riscador<br/>";
            if ($this->carga > 0){
                echo "Chama acesa!";
            }else{
                echo "Esse isqueiro não funciona mais";
            }
        }else{
            echo "Esse isqueiro não funciona mais!";
        }
    }
}
