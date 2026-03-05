<?php
$titulo = $_POST["titulo"] ?? null;
$corpo = $_POST["corpo"] ?? null;
$cor_texto = $_POST["cor_texto"] ?? null;
$imagem = $_POST["imagem"] ?? null;
$link = $_POST["link"] ?? null;
$cor_fundo = $_POST["cor_fundo"] ?? null;
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Formulário</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
        <style>
            body {
                background-color: <?php echo $cor_fundo; ?>;
                color: <?php echo $cor_texto; ?>;
            }
            p{
                font-size: 20px;
            }
        </style>

    </head>
    <body class="w-100 vh-100">
        <section class="my-3 mx-5">
            <h1><?php echo $titulo; ?></h1>
            <hr>

            <p>
            <?php echo nl2br($corpo); ?>
            </p>

            <img src="<?php echo $imagem; ?>" width="500">

            <br><br>

            <a href="<?php echo $link; ?>" target="_blank">
                <?php echo $link; ?>
            </a>
        </section>
    </body>
</html>