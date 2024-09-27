<?php
require 'configPdo.php';
include 'configPdo.php';

$nome = $_POST['inputNome'];
$email = $_POST['inputEmail'];

//$sql = $pdo->prepare() serve para poder fazer um comando SQL
function enviarBanco($pdo, $nome, $email)
{
    //Preparando o envio
    $sql = $pdo->prepare("INSERT INTO usuario (nome, email) 
            VALUES (:nome , :email)");
    $sql->bindValue(':nome', $nome);
    $sql->bindValue(':email', $email);

    // enviando
    $sql->execute();
};
enviarBanco($pdo,$nome,$email);
?>