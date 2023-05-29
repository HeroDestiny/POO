<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Banco</title>
</head>

<body>
    <pre>
        <?php
        require_once 'ContaBanco.php';

        $p1 = new ContaBanco();
        $p2 = new ContaBanco();

        //Jubileu
        $p1->abrirConta("CC");
        $p1->setnumConta(1111);
        $p1->setDono("Jubileu");
        $p1->depositar(300);

        //Creuza
        $p2->abrirConta("CP");
        $p2->setnumConta(2222);
        $p2->setDono("Creuza");
        $p2->depositar(500);

        print_r($p1);
        print_r($p2);
        ?>
        </pre>
    <br />
</body>

</html>