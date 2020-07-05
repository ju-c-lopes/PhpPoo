<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
        <?php
            require_once 'Pessoa.php';  
            require_once 'Livro.php';
            
            $p[0] = new Pessoa("José", 19, 2, 1981, "M");
            $p[1] = new Pessoa("Maria", 06, 11, 1990, "F");
            $p[2] = new Pessoa("Marcos", 29, 2, 1988, "M");
            $p[3] = new Pessoa("Julia", 31, 3, 2002, "F");
            $p[4] = new Pessoa("Lilian", 6, 7, 1998, "F");
            
            $l[0] = new Livro("PHP Básico", "José da Silva", 300, $p[0]);
            $l[1] = new Livro("POO com PHP", "Maria de Souza", 500, $p[0]);
            $l[2] = new Livro("PHP Avançado", "Ana Paula", 800, $p[1]);
            $l[3] = new Livro("Internet", "Paulo Marcos", 250, $p[3]);
            $l[4] = new Livro("Hardware", "Norberto Tomas", 350, $p[2]);
            
            $l[0]->abrir();
            $l[0]->folhear(59);
            $l[0]->fechar();
            $l[0]->avancarPag();
            $l[0]->avancarPag();
            $l[0]->avancarPag();
            $l[0]->fechar();
            $l[0]->abrir();
            $l[0]->voltarPag();
            $l[0]->fechar();
            $l[0]->abrir();
            $l[0]->avancarPag();
            $l[0]->avancarPag();
            $l[0]->avancarPag();
            $l[0]->fechar();
            
            
            print_r($l);
            echo "<hr/>";
            print_r($p);
        ?>
        </pre>
    </body>
</html>
