<?php 

$inicio = $_POST['inicio'] ?? 0;
$final = $_POST['final'] ?? 0;
$incremento = $_POST['incremento'] ?? 0;

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Contador - Praticando 05</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    </head>
    <body class="w-100 vh-100">
        <section class="w-100 px-5 py-3">
            <h1>Contador</h1>
            <hr>
            <h2>Parâmetros Informados:</h2>
            <?php 
            if(($incremento != '') && ($inicio != '') && ($final != '')){
                if($inicio < $final){
                    echo "<p>Início: $inicio</p>";
                    echo "<p>Final: $final</p>";
                    echo "<p>Incremento: $incremento</p>";
                    for($i = $inicio; $i < ($final+1); ($i+=$incremento)){
                        echo "<span>$i </span>";
                    }
                } else {
                    echo "<p>Início: $inicio</p>";
                    echo "<p>Final: $final</p>";
                    echo "<p>Incremento: $incremento</p>";
                    for($i = $final; $i < ($inicio+1); ($inicio-=$incremento)){
                        echo "<span>$inicio </span>";
                    }
                }
            }
            ?>

        </section>
    </body>
</html>