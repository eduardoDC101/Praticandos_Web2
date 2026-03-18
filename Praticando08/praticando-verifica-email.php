<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praficando - Verificaçãode E-mail</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <style>
        button{
            border-radius: 0 5px 5px 0;
        }
    </style>
</head>
<body class="w-100 vh-100">
    <section class="container mx-5 px-5 py-4">
        <h1>Praticando - Verificação de E-mail</h1>
        <hr>
        <form id="formEmail" action="" method="post" class="w-50 mb-5">
            <label for="email" class="w-100">
                Informe seu melhor E-mail:
                <div class="d-flex flex-row gap-0 w-75">
                    <input type="email" name="email" id="email" placeholder="email@address.com" required class="p-2 w-75 border border-2">
                    <button type="submit" class="bg-primary text-white border-0 px-3 py-2">Verificar</button>
                </div>
            </label>
            <div id="mensagem" class="mt-2">

            </div>
        </form>
        <a href="http://localhost/Praticandos/Praticando08/">Voltar ao menu</a>
    </section>
    
    <script>
        document.getElementById("formEmail").addEventListener("submit", function(e){

            e.preventDefault(); 

            const email = document.getElementById("email").value;

            fetch("verificar-email.php", {
                method: "POST",
                headers:{
                    "Content-Type": "application/x-www-form-urlencoded"
                },
                body: "email=" + encodeURIComponent(email)
            })
            .then(resposta => resposta.text())
            .then(dados => {

                const campo = document.getElementById("email");
                const mensagem = document.getElementById("mensagem");

                if(dados === "existe"){

                    campo.classList.remove("border-success");
                    campo.classList.add("border-danger");

                    mensagem.innerHTML =
                    '<div class="text-danger">E-mail já cadastrado</div>';
                }
                else{

                    campo.classList.remove("border-danger");
                    campo.classList.add("border-success");

                    mensagem.innerHTML =
                    '<div class="text-success">E-mail cadastrado com sucesso</div>';
                }

            });

        });

    </script>
</body>
</html>