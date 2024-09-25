<?php
require '/xampp/htdocs/Cadastro-com-Banco/Crud/configPdo.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>

    <form action="/Crud/inserir.php" method="post">

    <label>Escreva seu nome</label>
    <input type="text" placeholder="Nome" name="inputNome">
    <br>
    <label>Escreva seu email</label>
    <input type="email" placeholder="Email" name="inputEmail">
    <button type="submit">Enviar</button>
    </form>


</body>
</html>