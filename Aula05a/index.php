<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
        <?php
            require_once 'ContaBanco.php';
            $p1 = new ContaBanco(); // Jubileu
                        
            $p1->abrirConta("CC");
            $p1->setNumConta(1111);
            $p1->setDono("Jubileu");
            $p1->depositar(300);
            
            $p1->fecharConta();
            
            print_r($p1);
            
            $p2 = new ContaBanco(); // Creuza
            
            $p2->abrirConta("CP");
            $p2->setNumConta(2222);
            $p2->setDono("Creuza");           
            $p2->depositar(500);
            
            $p2->sacar(100);
            
            $p2->fecharConta();
                        
            print_r($p2);
        ?>
        </pre>
    </body>
</html>
