<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>ControleRemoto</title>
</head>

<body>
    <pre>
        <?php
        require_once 'ControleRemoto.php';

        $c = new ControleRemoto();
        $c->ligar();
        $c->abrirMenu();
        
        ?>
        </pre>
    <br />
</body>

</html>