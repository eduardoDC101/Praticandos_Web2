<?php
$titulo = "Página Sobre";
$imagem = "https://avatars.githubusercontent.com/u/166930671?s=400&u=c86cb68cb2955eb46e0df40aa8f4c5e7f085a478&v=4";
?>
<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sobre</title>
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <style>
            .img-lorem {
                width: 30%;
            }

            .inicio p {
                text-align: justify;
                text-indent: 3.5em;
            }
        </style>
    </head>
    <body>
        <?php include "../partes/header.php" ?> <!-- include = se não achar mostra o restante | require = se não achar dá erro. Require bom para arquivos essenciais (bd), include util para arquivos ok. Como header, footer...-->
            <?php include "../partes/titulo.php" ?>
            <?php include "../partes/conteudo.php" ?>
        <?php include "../partes/footer.php"?>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </body>
</html>