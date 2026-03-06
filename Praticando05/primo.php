<?php 

$numero = $_GET['numero'] ?? '';
$primo = true;
$cor = '#ff6868b0';
$enaoe = 'não é';
$borda = 'border-danger';
$parim = 'Impar';

if ($numero <= 1) {
    $primo = false;
} else {
    for ($i = 2; $i <= sqrt($numero); $i++) {
        if ($numero % $i == 0) {
            $primo = false;
            break;
        }
    }
}

if ($primo) {
    $cor = "#68ff83b0";   
    $enaoe = "é";
    $borda = "border-success";
}

if($numero % 2 == 0)
    $parim = "Par";
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Tabuada - Praticando 05</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
        <style>
            .texto{
                font-size: 28px;
            }
            p{
                line-height: 60px;
            }
        </style>
    </head>
    <body class="w-100 vh-100">
        <section class="w-100 px-5 py-3">
            <h1>Números Primos</h1>
            <hr>
            <div class="w-100 d-flex justify-content-between align-items-center">
                <a href="?numero=1">Número 1</a>
                <a href="?numero=2">Número 2</a>
                <a href="?numero=3">Número 3</a>
                <a href="?numero=5">Número 5</a>
                <a href="?numero=20">Número 20</a>
                <a href="?numero=32">Número 32</a>
                <a href="?numero=37">Número 37</a>
            </div>
            <br>
            <br>
        <?php if($numero != ''){?>

        <div class="w-50 mx-auto my-0 text-center texto">
            <p>O número <span style="background-color: <?php echo $cor?>;" class="border border-2 <?php echo $borda ?> p-2"><?php echo $numero?></span> <span style="background-color: <?php echo $cor?>;" class="border border-2 p-2 <?php echo $borda ?>"><?php echo $enaoe ?></span> um número <span style="background-color: <?php echo $cor?>;" class="border border-2 p-2 <?php echo $borda ?>">Primo</span>. Além disso ele é um número <span style="background-color: <?php echo $cor?>;" class="border border-2 p-2 <?php echo $borda ?>"><?php echo $parim ?></span></p>
        </div>

        <?php }?>
        </section>
    </body>
</html>