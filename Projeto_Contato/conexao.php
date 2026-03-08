<?php 

$conexao = pg_connect("host=localhost dbname=Contato user=postgres password=postdba");

if (!$conexao) {
    die("Erro na conexão com o banco!");
}

?>