<?php

$titulo = "Formulário para Contato";
if($_SERVER["REQUEST_METHOD"] == "POST" ){
    $mensagem = $_POST['mensagem'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $dataAtual = new DateTime('now', new DateTimeZone('America/Sao_Paulo'));
}

?>
<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Destino Formulário</title>
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <style>
            .img-lorem {
                width: 30%;
            }

            .inicio p {
                text-align: justify;
                text-indent: 3.5em;
            }
            a{
                text-decoration: none;
            }
        </style>
    </head>
    <body>
        <?php require "../partes/header.php" ?>
            <?php require "../partes/titulo.php" ?>
            <section>
                <p>Nome: <?= $nome ?></p>
                <p>E-mail: <?= $email ?></p>
                <p>Mensagem: <?= $mensagem ?></p>
                <p>Data: <?= $dataAtual->format('d/m/Y - H:i:s') ?></p>
                <br>
                <a href="contato.php" class="bg-info px-3 py-2 rounded-2 text-dark mx-5">Voltar</a>
            </section>
        <?php require "../partes/footer.php"?>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </body>
</html>