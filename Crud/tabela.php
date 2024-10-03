<?php
require 'configPdo.php';

//Criando uma array

$sql = $pdo->query("SELECT * FROM usuario");

$lista = [];

//FETCH_ASSOC é para retornar uma array associativa (Uma arrei que não é um indice 123 e sim podendo ser qualquer coisa.)

if ($sql->rowCount() > 0) {
    $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <table border="1px">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">Email</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($lista as $dados) :
            ?>
                <tr>
                    <td> <?php echo $dados['id']; ?></td>
                    <td> <?php echo $dados['nome']; ?></td>
                    <td> <?php echo $dados['email']; ?></td>
                    <td><a href="editar.php?id<?= $dados['id']?>">Editar</a></td>
                    <td><a href="excluir.php?id<?= $dados['id']?>">Excluir</a></td>
                </tr>
            <?php endforeach; ?>
    </table>


    <form action="inserir.php" method="post">

        <label>Escreva seu nome:</label>
        <input type="text" placeholder="Nome" name="inputNome" require>
        <br>
        <label>Escreva seu email</label>
        <input type="email" placeholder="Email" name="inputEmail" require>
        <button type="submit">Enviar</button>
    </form>
</body>

</html>