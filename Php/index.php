<?php include 'controle.php';
      echo '<br>';
?>
<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detecta video PHP</title>
</head>
<body>
    <?php
        foreach($match[1] as $link) {
    ?>
    <iframe width="560" height="315" src="https://www.youtube.com/embed/<?= $link?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    <?php
        }
    ?>
</body>
</html>