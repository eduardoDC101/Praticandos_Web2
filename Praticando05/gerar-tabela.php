<?php

$linhas = $_POST['linhas'];
$colunas = $_POST['colunas'];
$estilo = $_POST['estilo'];

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Tabela Gerada</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</head>

<body class="container mt-4">

<h2>Tabela <?php echo $linhas . "x" . $colunas; ?></h2>

<table class="table table-bordered <?php echo $estilo; ?>">

<?php

for ($i = 0; $i < $linhas; $i++) {

    echo "<tr>";

    for ($j = 0; $j < $colunas; $j++) {

        echo "<td>-</td>";

    }

    echo "</tr>";

}

?>

</table>

</body>
</html>