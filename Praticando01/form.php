<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Formulário</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    </head>
    <body class="w-100 vh-100">
        <section class="my-3 mx-5">
            <h1>Formulário</h1>
            <hr>

            <div class="w-100 d-flex justify-content-center align-items-center">
                <form action="destino.php" method="POST" class="w-50 d-flex flex-column justify-content-center align-items-start gap-3">

                    <label class="w-100 text-end">Título da página:
                        <input class="w-75 p-2" type="text" name="titulo">
                    </label>

                    <div class="d-flex w-100 gap-1">
                        <label class="w-25 text-end">Corpo:</label>
                        <textarea class="w-75 p-2" name="corpo" rows="5" cols="40"></textarea>
                    </div>

                    <label class="w-100 text-end">Cor do texto:
                        <input class="w-75 p-2" type="color" name="cor_texto">
                    </label>

                    <label class="w-100 text-end">URL da imagem:
                        <input class="w-75 p-2" type="url" name="imagem">
                    </label>

                    <label class="w-100 text-end">URL do link:
                        <input class="w-75 p-2" type="url" name="link">
                    </label>
                
                    <label class="w-100 text-end">Cor do fundo:
                        <input class="w-75 p-2" value="#add8e6" type="color" name="cor_fundo">
                    </label>

                    <div class="d-flex gap-3 w-75 justify-content-center">
                        <button type="submit" class="px-3 py-2 border-0 rounded-2 bg-primary text-white">Enviar</button>
                        <button type="reset" class="px-3 py-2 border-0 rounded-2 bg-warning">Limpar</button>
                    </div>

                </form>
            </div>

        </section>
    </body>
</html>