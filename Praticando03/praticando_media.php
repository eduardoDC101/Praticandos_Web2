<?php

$nota1 = $_POST["nota1"];
$nota2 = $_POST["nota2"];
$nota3 = $_POST["nota3"];

$media = ($nota1 + $nota2 + $nota3) / 3;

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Praticando - Calculadora média</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    </head>

    <body class="w-100 vh-100">
        <section class="my-3 mx-5">
            <h1>Praticando - Calculadora média</h1>
            <hr>

            <p>
            Um aluno com as notas <?php echo $nota1 ?>, <?php echo $nota2 ?> e <?php echo $nota3 ?>
            tem uma média igual a <strong><?php echo $media ?></strong>
            </p>

            <p>
                Com essa média o aluno está 
            <?php

            if($media < 4){

                echo "<span style='color:red'>REPROVADO</span>";

            }
            else if($media > 4 && $media < 6){

                echo "<span style='color:orange'>DE RECUPERAÇÃO</span>";

            }
            else{

                echo "<span style='color:green'>APROVADO</span>";

            }

            ?>

            </p>
        </section>
    </body>
</html>