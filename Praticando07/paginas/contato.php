<?php
$titulo = "Formulário para Contato";
?>
<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Contato</title>
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <style>
            .img-lorem {
                width: 30%;
            }

            .inicio p {
                text-align: justify;
                text-indent: 3.5em;
            }
            input{
                outline: none;
            }
            textarea{
                height: 100px;
                outline: none;
            }
        </style>
    </head>
    <body>
        <?php require "../partes/header.php" ?>
            <?php require "../partes/titulo.php" ?>
            <form action="destino-form.php" method="post" class="w-100">
                <div class="d-flex flex-row w-75 mx-auto my-0 gap-3 mb-3">
                    <label for="nome" class="d-flex flex-column w-50">
                        Nome:
                        <input type="text" name="nome" id="nome" class="p-2 rounded-2 border border-1 border-secondary">
                    </label>
                    <label for="email" class="d-flex flex-column w-50">
                        E-mail:
                        <input type="email" name="email" id="title" placeholder="Digite seu E-mail" class="p-2 rounded-2 border border-1 border-secondary">
                    </label>
                </div>
                <label for="mensagem" class="d-flex flex-column w-75 mx-auto my-0 mb-3">
                    Mensagem:
                    <Textarea name="mensagem" id="mensagem" rows="4" cols="50" style="resize: none;" class="p-2 rounded-2 border border-1 border-secondary"></Textarea>
                </label>
                <div class="d-flex flex-row w-50 mx-auto my-0 gap-2 mb-3 aligin-itemns-center justify-content-center">
                    <button type="submit" class="bg-primary text-white border-0 rounded-2 px-3 py-2">Enviar</button>
                    <button type="reset" class="bg-warning border-0 rounded-2 px-3 py-2">Limpar</button>
                </div>
            </form>
        <?php require "../partes/footer.php"?>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </body>
</html>