<?php 

    include 'conecta.php';

    $nome = $_POST["nome"];
    $email = $_POST ["email"];
    $id = $_POST["id"];


    $sql = "UPDATE aluno SET nome=\"$nome\", email=\"$email\" WHERE id=$id";
    $exec = $pdo->query($sql);

?>