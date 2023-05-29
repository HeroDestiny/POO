<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
</head>

<body>
    <pre>
    <?php
    require_once 'Pessoa.php';
    require_once 'Livro.php';
    $p[0] = new Pessoa("Paulo" ,24 ,"M");
    $p[1] = new Pessoa("Maria", 31, "F");

    $l[0] = new Livro("PHP Basico", "Fulano", 300, $p[0]);
    $l[1] = new Livro("Vida de um Uchiha", "Madara", 666, $p[0]);
    $l[2] = new Livro("Ninjustu", "Might Guy", 800, $p[1]);

    $l[0]->folhear(80);
    $l[0]->detalhes();
    echo "<br>";
    $l[1]->detalhes();
    echo "<br>";
    $l[2]->detalhes();

    ?>
    </pre>
</body>

</html>