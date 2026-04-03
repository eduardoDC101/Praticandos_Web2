<?php 

use Claudsonm\CepPromise\CepPromise;
use Claudsonm\CepPromise\Exceptions\CepPromiseException;

require 'vendor/autoload.php';

$address = null;
$estilo = null;
$erro = null;

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $cep = $_POST['cep'] ?? '';
    $cep = preg_replace('/\D/', '',$cep);

    try {
        $address = CepPromise::fetch($cep);
        $estilo = "fundo-verde border border-3 border-success rounded-3";
        $cepFormatado = substr($cep, 0, 2) . '.' . substr($cep, 2, 3) . '-' . substr($cep, 5, 3);
    } catch(CepPromiseException $e) {
        $estilo = "fundo-vermelho border border-3 border-danger rounded-3";
        $erro = ".";
    }
}

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praticando CEP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
        .fundo-verde{
            background-color: #19875427 !important;
        }
        .fundo-vermelho{
            background-color: #dc35462a !important;
        }
    </style>
</head>
<body class="w-100 vh-100">
    <main class="container mt-4 px-5">
        <h1>Praticando Composer - Busca CEP com Composer</h1>
        <hr>
        <form action="." method="POST" class="d-flex flex-row justify-container-center align-items-end gap-3">
            <label for="cep" class="d-flex flex-column">
                CEP:
                <input type="text" id="cep" name="cep" placeholder="Somente Números..." class="p-2 rounded-2 border border-1 border-dark">
            </label>
            <div id="btns" class="d-flex flex-row align-items-center justify-cointainer-center gap-1">
                <button type="submit" class="text-white bg-primary px-3 py-2 rounded-2 border-0">Enviar</button>
                <button type="button" onclick="window.location.href='.'" class="bg-warning px-3 py-2 rounded-2 border-0">Limpar</button>
            </div>
        </form>
        <section id="dados" class="w-100 mt-5">
            <?php if($address) {?>
                <div class="pt-2 pb-4 px-2 <?= $estilo ?>">
                    <h2>CEP: <?= $cepFormatado ?></h2>
                    <div class="d-flex flex-column">
                        <span>Rua: <?= $address->street ?></span>
                        <span>Bairro: <?= $address->district ?></span>
                        <span>Cidade: <?= $address->city ?></span>
                        <span>Estado: <?= $address->state ?></span>
                    </div>
                </div>
            <?php } ?>
            <?php if($erro) {?>
                <div class="pt-2 pb-4 px-2 <?= $estilo ?>">
                    <h2>CEP: <?= $cep ?></h2>
                    <p>Detalhes do erro:</p>
                    <ul>
                        <li>CEP não encontrado na base do ViaCEP</li>
                        <li>CEP não encontrado na base do CEP Aberto</li>
                        <li>A autenticação de null falhou! (na base dos correios)</li>
                    </ul>
                </div>
            <?php } ?>
        </section>
    </main>
</body>
</html>