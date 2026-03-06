<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Destino</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <style>
            pre{
                background-color: #D3D3D3;
                border: 2px solid green;
                color: #7B0323;
                padding: 10px 15px;
            }
        </style>
    </head>

    <body class="container my-3">

        <h1>Destino</h1>
        <hr>

        <h3>Dados da requisição:</h3>

        <pre class="">
<?php
var_dump($_POST["interesses"]);
?>
        </pre>

        <h3>Interesses selecionados (em ordem alfabética)</h3>

        <ul>

            <?php

            $interesses = $_POST["interesses"];

            sort($interesses);

            $total = count($interesses);

            $limite = 3;

            for($i = 0; $i < $total && $i < $limite; $i++){
                echo "<li>$interesses[$i]</li>";
            }

            if($total > 3){
                echo "<li>...</li>";
            }

            ?>

        </ul>

        <br>

        <a href="formulario.php">Voltar para o formulário</a>

    </body>
</html>