<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Video</title>
</head>

<body>
    <pre>
    <?php
    require_once 'Video.php';
    require_once 'Gafanhoto.php';
    require_once 'Visualizacao.php';
    $v[0] = new Video("Como andar sobre a agua ft.Kakashi");
    $v[1] = new Video("BURLEI O CAPTCHA E VEJA NO QUE DEU! ft.ChatGPT");
    $v[2] = new Video("Uma avaliação profundo sobre o entendimento de uma compreensão a partir de uma partida de lol");

    $p[0] = new Gafanhoto("Fulano", 22, "M", "Full");

    $vis[0] = new visualizacao($p[0], $v[0]);
    $vis[1] = new visualizacao($p[0], $v[2]);

    $vis[0]->avaliar();
 
    print_r($v);
    print_r($p);
    print_r($vis);
    ?>
    </pre>
</body>

</html>