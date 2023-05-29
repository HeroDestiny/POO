<!DOCTYPE html>
<html>

<head lang="pt-br">
    <meta charset="utf-8">
    <title>Polimorfismo</title>
</head>

<body>
    <pre>
    <?php
    require_once 'Mamifero.php';
    require_once 'Lobo.php';
    require_once 'Cachorro.php';
    $p1 = new Mamifero();
    $p2 = new Lobo();
    $p3 = new Cachorro();
    //mamifero
    echo "Mamifero";
    $p1->Alimentar();
    $p1->Locomover();
    $p1->emitirSom();
    //lobo
    echo "----------------------------------------";
    echo "<p>Lobo</p>";
    $p2->Alimentar();
    $p2->Locomover();
    $p2->emitirSom();
    echo "----------------------------------------";
    echo "<p>Cachorro</p>";
    $p3->Alimentar();
    $p3->Locomover();
    $p3->emitirSom();
    $p3->ReagirFrase("Olá")
    ?>
    </pre>
</body>

</html>