<?php

if($_SERVER["REQUEST_METHOD"] === "POST"){
    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);

    $arquivo = "emails.txt";

    if(!file_exists($arquivo)){
        file_put_contents($arquivo, "");
    }

    $emails = file($arquivo, FILE_IGNORE_NEW_LINES);//ele vai ler o arquivo ignorandi \n e colocar num array

    if(in_array($email, $emails)){
        echo "existe";
    }
    else{
        file_put_contents($arquivo, $email . PHP_EOL, FILE_APPEND);
        echo "novo";
    }

}