<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praticando - Cadastro de Tarefas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <style>
        input{
            outline: none;
        }
    </style>
</head>
<body class="w-100 vh-100">
    <section class="w-100 container py-3">
        <h1>Praticando - Cadastro de Tarefas</h1>
        <hr>
        <form id="formTarefa" action="" class="w-100">
            <div class="d-flex gap-4 justify-content-between align-items-start ">
                <div class="w-50">
                    <label for="descricao" class="d-flex flex-column w-100">
                        <b>Descrição da Tarefa:</b>
                        <input type="text" name="descricao" id="descricao" required class="p-2 border rounded-2">
                    </label>
                </div>
                <div id="prioridade" class="d-flex flex-column justify-content-center w-50 gap-0">
                    <span><b>Prioridade:</b></span>
                    <label for="alta">
                        <input type="radio" id="alta" name="prioridade" value="Alta">
                        Alta
                    </label>
                    <label for="media">
                        <input type="radio" id="media" name="prioridade" value="Media">
                        Média
                    </label>
                    <label for="baixa">
                        <input type="radio" id="baixa" name="prioridade" value="Baixa">
                        Baixa
                    </label>
                </div>
            </div>
            <button type="submit" class="px-3 py-2 bg-primary text-white rounded-2 border-0">Cadastrar</button>
        </form>
        <hr>

        <h3 class="my-4">Tarefas Cadastradas</h3>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Descrição</th>
                    <th>Prioridade</th>
                    <th>Data</th>
                </tr>
            </thead>
            <tbody id="listaTarefas">
            </tbody>
        </table>

        <button id="apagar" class="btn btn-danger">
            Apagar todas
        </button>
    </section>
    <script>

    document.getElementById("formTarefa").addEventListener("submit", function(e){

        e.preventDefault();

        const descricao = document.getElementById("descricao").value;
        const prioridade = document.querySelector('input[name="prioridade"]:checked')?.value;

        if(!prioridade){
            alert("Selecione uma prioridade");
            return;
        }
        fetch("cadastrar-tarefa.php", {
            method: "POST",
            headers:{
                "Content-Type": "application/x-www-form-urlencoded"
            },
            body: "descricao=" + encodeURIComponent(descricao) +
                "&prioridade=" + encodeURIComponent(prioridade)
        })
        .then(res => res.text())
        .then(() => {
            carregarTarefas();
            document.getElementById("formTarefa").reset();
        });

    });

    function carregarTarefas(){

        fetch("listar-tarefas.php")
        .then(res => res.text())
        .then(dados => {
            document.getElementById("listaTarefas").innerHTML = dados;
        });

    }

    carregarTarefas();

    document.getElementById("apagar").addEventListener("click", function(){

        if(confirm("Deseja apagar todas as tarefas?")){

            fetch("apagar-tarefas.php")
            .then(() => carregarTarefas());

        }

    });

    </script>
</body>
</html>