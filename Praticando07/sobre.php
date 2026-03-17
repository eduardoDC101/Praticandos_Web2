<?php
$titulo = "Página Sobre";
$imagem = "https://media.licdn.com/dms/image/v2/D4D35AQFeokDd3by0ZA/profile-framedphoto-shrink_400_400/B4DZiGCtyrH4Ag-/0/1754595515877?e=1774382400&v=beta&t=OCJ3xtbGLrqYo_Vk2YX95e_D6CogHqA4lj_fO6b8zTk";
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
        <?php include "header.php" ?> <!-- include = se não achar mostra o restante | require = se não achar dá erro. Require bom para arquivos essenciais (bd), include util para arquivos ok. Como header, footer...
            <?php include "titulo.php" ?>
            <?php include "conteudo.php" ?>
        <?php include "footer.php"?>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </body>
</html>