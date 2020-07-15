<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
        <?php
            /* HERANÇA:
            
            Permite basear uma nova classe na definição de
            uma outra classe previamente existente.
             * 
            Herança é aplicada tanto para características quanto
            para comportamentos. */
        
            require_once 'Pessoa.php';
            require_once 'Aluno.php';
            require_once 'Professor.php';
            require_once 'Funcionario.php';
            
            $p1 = new Pessoa();
            $p2 = new Aluno();
            $p3 = new Professor();
            $p4 = new Funcionario();
            
            $p1->setNome("Pedro");
            $p2->setNome("Maria");
            $p3->setNome("Cláudio");
            $p4->setNome("Fabiana");
            
            $p1->setSexo("M");
            $p4->setSexo("F");
            
            $p2->setCurso("Informática");
            $p3->setSalario(2000.75);
            $p4->setSetor("Estoque");
            
            $p3->receberAumento(520);
            $p4->mudarTrabalho();
            $p2->cancelarMat();
            
            print_r($p1);
            print_r($p2);
            print_r($p3);
            print_r($p4);
        ?>
        </pre>
    </body>
</html>
