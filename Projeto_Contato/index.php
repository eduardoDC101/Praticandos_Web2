<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto Contato</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <style>
        .semFoco{
            outline: none !important;
        }
        .resizeN{
            resize: none;
        }
    </style>
</head>
<body class="w-100 vh-100 bg-dark p-5">
    <section class="w-75 mx-auto my-0 h-100">
        <form action="salvar.php" method="POST" class="bg-white w-75 mx-auto my-0 h-100 rounded-2 py-3">
            <legend class="h1 fs-2 text-center mb-4">Formulário de Contato</legend>
            <div class="w-100 d-flex justify-content-center gap-4 px-4 mb-4">
                <label for="nome" class="w-50">
                    Nome:
                    <input type="text" name="nome" id="nome" placeholder="Digite seu Nome..." class="w-100 p-1 semFoco" required>
                </label>
                <label for="email" class="w-50">
                    E-mail:
                    <input type="email" name="email" id="email" placeholder="Digite seu E-mail..." class="w-100 p-1 semFoco" required>
                </label>
            </div>
            <label for="mensagem" class="w-100 px-4 mb-4">
                Conteúdo:
                <textarea id="mensagem" name="mensagem" rows="7" class="resizeN w-100 semFoco p-1" required></textarea>
            </label>
            <div id="botoes" class="w-100 px-4">
                <button type="submit" class="bg-primary border-0 rounded-1 px-3 py-2 text-white">Enviar</button>
                <button type="reset" class="bg-secondary border-0 rounded-1 px-3 py-2 text-white">Limpar</button>
            </div>
        </form>
    </section>
</body>
</html>