<?php

if($_SERVER["REQUEST_METHOD"] === "POST"){

    $descricao = filter_input(INPUT_POST, "descricao", FILTER_SANITIZE_SPECIAL_CHARS);
    $prioridade = filter_input(INPUT_POST, "prioridade", FILTER_SANITIZE_SPECIAL_CHARS);

    $arquivo = "tarefas.txt";

    if(!file_exists($arquivo)){
        file_put_contents($arquivo, json_encode([]));
    }

    $dados = file_get_contents($arquivo);
    $tarefas = json_decode($dados, true);

    $tarefas[] = [
        "descricao" => $descricao,
        "prioridade" => $prioridade,
        "data" => date("d/m/Y H:i")
    ];

    file_put_contents($arquivo, json_encode($tarefas));
}