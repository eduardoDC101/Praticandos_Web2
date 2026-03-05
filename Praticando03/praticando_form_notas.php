<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Praticando Calculadora média</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    </head>

    <body class="w-100 vh-100">

        <section class="my-3 mx-5">
            <h1>Praticando Calculadora média</h1>
            <hr>

            <form action="praticando_media.php" method="POST" class="w-100">

                <div class="w-50 d-flex flex-column align-items-center">
                    <p>
                    Nota 1:
                    <input class="p-2" type="number" name="nota1" min="0" max="10" step="0.5">
                    </p>

                    <p>
                    Nota 2:
                    <input class="p-2" type="number" name="nota2" min="0" max="10" step="0.5">
                    </p>

                    <p>
                    Nota 3:
                    <input class="p-2" type="number" name="nota3" min="0" max="10" step="0.5">
                    </p>
                </div>

                <button class="text-white bg-success border-0 rounded-1 px-3 py-2" type="submit">Calcular média</button>
                <button class="bg-warning border-0 rounded-1 px-3 py-2" type="reset">Limpar</button>

            </form>
        </section>

    </body>
</html>