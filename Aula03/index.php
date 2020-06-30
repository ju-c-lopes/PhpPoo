<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula 02 - POO</title>
    </head>
    <body>
        <pre>
        <?php
            require_once 'Caneta.php';
            
            $c1 = new Caneta;
            $c1->modelo = "BIC Cristal";
            $c1->cor = "Azul";
            //$c1->ponta = 0.5;
            //$c1->carga = 99;
            //$c1->tampada = true;
            /* Ao tentarmos modificar diretamente os atributos privado e protegido 
            somos notificados que não podemos modificá-los pois estamos chamando-os
            fora da classe ao qual eles pertencem */
                        
            $c1->rabiscar();
            $c1->tampar();
            $c1->destampar();
            /* os métodos tampar() e destampar(), definidos como público, tem acesso
            ao atributo protegido tampada por pertencerem à classe Caneta,
            sendo assim, ele conseguem modificar o valor do atributo protegido */
            print_r($c1);            
        ?>
        </pre>
    </body>
</html>
