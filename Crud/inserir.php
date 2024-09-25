<?php
    require 'configPdo.php';

    $nome=$_POST['inputNome'];
    $email=$_POST['inputEmail'];

    //Preparando o envio

    $sql = $pdo->prepare("INSERT INTO usuario (nome, email) VALUES (:nome , :email)");
    $sql->bindValue(':nome',$nome);
    $sql->bindValue(':email',$email);

    // enviando

    $sql->execute();
?>