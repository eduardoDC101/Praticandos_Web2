<?php
$titulo = "Página FAQs";
$imagem = "https://cdn.shopify.com/app-store/listing_images/5920b260fef1349814d3c1cc8a50d14a/icon/COelzvfTg_sCEAE=.png";
?>
<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>FAQs</title>
        
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
        <?php require "header.php" ?>
            <?php require "titulo.php" ?>
            <?php require "conteudo.php" ?>
        <?php require "footer.php"?>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </body>
</html>