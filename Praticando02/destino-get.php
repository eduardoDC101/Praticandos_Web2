<?php

$nome = $_GET["nome"] ?? "";
$email = $_GET["email"] ?? "";
$cor = $_GET["cor"] ?? "";

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Destino GET</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
        <style>
            .quadrado{
                border: 2px solid black;
                min-width: 200px;
                min-height: 200px;
                padding: 12px;
                color: white;
            }
            #divquadr a{
                color: white;
                text-decoration: none !important;
            }

            .vermelho{
                background-color: red; 
            }

            .azul{
                background-color: blue; 
            }

            .verde{
                background-color: green; 
            }

            #divquadr p{
                font-size: 10px;
            }
        </style>
    </head>

    <body class="w-100 vh-100" style="background-color: <?php echo $cor; ?>;">
        <section class="my-3 mx-5">
            <h1>Destino GET</h1>
            <hr>

            <?php if($nome != "" && $email != ""){ ?>

            <p>Nome informado: <?php echo $nome; ?></p>
            <p>Email: <?php echo $email; ?></p>

            <?php } ?>

            <br>
            <br>

            <a href="?nome=Eder&email=epansani@gmail.com&cor=<?php echo $cor; ?>">
            [nome = Eder | email = epansani@gmail.com]
            </a>

            <br><br>

            <a href="?nome=José da Silva&email=jose1987@outlook.com&cor=<?php echo $cor; ?>">
            [nome = José da Silva | email = jose1987@outlook.com]
            </a>

            <br><br>

            <a href="destino-get.php">
            Limpar tudo
            </a>

            <br><br><br>

            <div id="divquadr" class="w-100 d-flex justify-content-around align-items-center pb-5">
                <a href="?nome=<?php echo $nome ?>&email=<?php echo $email ?>&cor=lightcoral" class="quadrado vermelho d-flex flex-column justify-content-end">
                <h5>Red</h5>
                <p>#FF0000</p>
                </a>

                <br><br>

                <a href="?nome=<?php echo $nome ?>&email=<?php echo $email ?>&cor=lightgreen" class="quadrado verde d-flex flex-column justify-content-end">
                <h5>
                    Green
                </h5>
                <p>#00FF00</p>
                </a>

                <br><br>

                <a href="?nome=<?php echo $nome ?>&email=<?php echo $email ?>&cor=lightblue" class="quadrado azul d-flex flex-column justify-content-end">
                <h5>
                    Blue
                </h5>
                <p>#0000FF</p>
                </a>
            </div>
        </section>
    </body>
</html>