<?php 

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Contador - Praticando 05</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
        <style>
            input{
                width: 150px;
            }
        </style>
    </head>
    <body class="w-100 vh-100">
        <section class="w-100 px-5 py-3">
            <h1>Contador</h1>
            <hr>
            <form action="destino-contador.php" method="POST" class="w-25 d-flex flex-column gap-3 align-items-end">
                <label for="inicio">
                    Inicio: 
                    <input class="mx-2" type="number" name="inicio">
                </label>
                <label for="final">
                    Final: 
                    <input class="mx-2" type="number" name="final">
                </label>
                <label for="incremento">
                    Incremento: 
                    <input class="mx-2" type="number" name="incremento">
                </label>
                <div id="botoes">
                    <button type="submit" class="text-white bg-success border-0 rounded-1 px-3 py-2">Enviar</button>
                    <button type="reset"  class="bg-warning border-0 rounded-1 px-3 py-2">Limpar</button>
                </div>
            </form>
        </section>
    </body>
</html>