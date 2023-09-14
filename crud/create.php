<?php 

    include 'conecta.php';

    $nome = $_POST["nome"];
    $email = $_POST ["email"];

    $sql = "INSERT INTO aluno (`nome`, `email`)value(\"$nome\",\"$email\")";
    $exec = $pdo->query($sql);
?>