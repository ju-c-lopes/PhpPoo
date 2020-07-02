<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Projeto Controle Remoto</h1>
        <pre>        
        <?php
            require_once 'ControleRemoto.php';
            $c = new ControleRemoto;
            $c->ligar();
            $c->maisVolume();
            $c->maisVolume();
            $c->play();
            $c->abrirMenu();
            $c->maisVolume();
            $c->maisVolume();
            $c->maisVolume();
            $c->maisVolume();
            $c->abrirMenu();
            $c->ligarMudo();
            $c->abrirMenu();
            $c->pause();
            $c->abrirMenu();
            $c->desligar();
            $c->abrirMenu();
        ?>        
        </pre>
    </body>
</html>
