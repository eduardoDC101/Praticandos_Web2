<?php

$animal = $_GET["animal"] ?? "";

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Praticando Animais</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
        <style>

            .container{
                display:flex;
                gap:20px;
            }

            img{
                width:250px;
                border:4px solid transparent;
            }

            .ativo{
                border:4px solid red;
            }

        </style>

    </head>

    <body class="w-100 vh-100">

        <section class="my-3 mx-5">
            <h1>Praticando Animais</h1>
            <hr>

            <div class="container">

                <a href="?animal=gato">
                    <img src="gato.jpg"
                    class="<?php if($animal=="gato") echo "ativo"; ?> img">
                </a>

                <a href="?animal=dog">
                    <img src="dog.jpg"
                    class="<?php if($animal=="dog") echo "ativo"; ?> img">
                </a>

                <a href="?animal=hamster">
                    <img src="hamster.jpg"
                    class="<?php if($animal=="hamster") echo "ativo"; ?> img">
                </a>

                <a href="?animal=largato">
                    <img src="largato.jpg"
                    class="<?php if($animal=="largato") echo "ativo"; ?> img">
                </a>

            </div>

            <br><br>

            <?php

            if($animal=="gato"){
                echo "<h2>Você clicou no Gato</h2>";
                echo "<p>O gato é um animal doméstico muito conhecido por sua independência e agilidade. Ele possui sentidos muito apurados, principalmente a visão noturna e a audição, o que o torna um excelente caçador.</p>";
                echo "<p>Além disso, os gatos são animais muito limpos e passam grande parte do tempo se lambendo para manter o corpo higienizado. Muitos também desenvolvem forte vínculo com seus donos.</p>";
            }

            if($animal=="dog"){
                echo "<h2>Você clicou no Cachorro</h2>";
                echo "<p>O cachorro é considerado o melhor amigo do ser humano devido à sua lealdade e capacidade de convivência com as pessoas. Ele é um dos animais domésticos mais populares do mundo.</p>";
                echo "<p>Os cães possuem grande capacidade de aprendizado e podem ser treinados para diversas funções, como companhia, segurança, resgate e até auxílio a pessoas com deficiência.</p>";
            }

            if($animal=="hamster"){
                echo "<h2>Você clicou no Hamster</h2>";
                echo "<p>O hamster é um pequeno roedor muito popular como animal de estimação. Ele é conhecido por seu tamanho pequeno, bochechas grandes e comportamento curioso.</p>";
                echo "<p>Esses animais costumam ser bastante ativos durante a noite e gostam de correr em rodas dentro de suas gaiolas. Também possuem o hábito de armazenar comida nas bochechas.</p>";
            }

            if($animal=="largato"){
                echo "<h2>Você clicou no Lagartixa</h2>";
                echo "<p>A lagartixa é um pequeno réptil muito comum em casas, principalmente em regiões tropicais. Ela costuma viver nas paredes e tetos, onde se move com facilidade.</p>";
                echo "<p>Apesar de muitas pessoas terem medo, as lagartixas são animais inofensivos e ajudam a controlar insetos, como mosquitos e baratas, servindo como um importante controle natural de pragas.</p>";
            }

            if($animal!=""){
                echo "<br>";
                echo "<a href='animais.php'>Limpar tudo</a>";
            }

            ?>
        </section>

    </body>
</html>