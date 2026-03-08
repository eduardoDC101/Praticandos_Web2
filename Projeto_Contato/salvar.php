<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    require 'conexao.php';

    $nome = $_POST['nome'] ?? '';
    $email = $_POST['email']  ?? '';
    $mensagem = $_POST['mensagem']  ?? '';

    if($nome != '' && $email != '' && $mensagem != ''){

        $sql = "INSERT INTO Contato (nome_contato, email_contato, mensagem_contato)
                VALUES ('$nome', '$email', '$mensagem')";

        $resultado = pg_query($conexao, $sql);

    }

} else{
    header("Location: index.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto Contato</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</head>
<body class="w-100 vh-100 p-5 bg-dark">
    <section class="w-75 mx-auto mt-0 mb-5">
        <?php if(isset($resultado) && $resultado){?>
        
        <article class='bg-success bg-opacity-50 border border-2 border-success text-white w-50 mx-auto my-auto px-4 py-3 fs-4 text-center rounded-2'>
            Mensagem Enviada com Sucesso!!!
        </article>
        
        <?php } else {?>

        <article class='bg-danger bg-opacity-50 border border-2 border-danger text-white w-50 mx-auto my-auto px-4 py-3 fs-4 text-center rounded-2'>
            A Mensagem Não Foi Enviada!!!
        </article>

        <?php }?>

    </section>
    <section class="w-100 mt-5 text-center">
        <a href="index.php" class="bg-primary text-white text-decoration-none rounded-2 px-4 py-2">Voltar</a>
    </section>
</body>
</html>