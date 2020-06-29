<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
        <?php
            require_once 'Isqueiro.php';
            
            $bic = new Isqueiro();
            
            $bic->marca = "Bic";
            $bic->carga = 20;
            $bic->cor = "Azul";
            $bic->riscador = 30;
                        
            print_r($bic);
            $bic->Acender();
        ?>
        </pre>
    </body>
</html>
