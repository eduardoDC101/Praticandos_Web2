<?php

$arquivo = "tarefas.txt";

if(!file_exists($arquivo)){
    exit;
}

$dados = file_get_contents($arquivo);
$tarefas = json_decode($dados, true);

if(!$tarefas){
    exit;
}

foreach($tarefas as $tarefa){

    if($tarefa["prioridade"] === "Alta"){
        $classe = "text-white bg-danger fw-bold px-2 rounded-2";
    }
    elseif($tarefa["prioridade"] === "Media"){
        $classe = "text-white bg-warning fw-bold px-2 rounded-2";
    }
    else{
        $classe = "text-white bg-success fw-bold px-2 rounded-2";
    }

    echo "<tr>";
    echo "<td>{$tarefa["descricao"]}</td>";
    echo "<td ><span class='$classe'>{$tarefa["prioridade"]}</span></td>";
    echo "<td>{$tarefa["data"]}</td>";
    echo "</tr>";
}