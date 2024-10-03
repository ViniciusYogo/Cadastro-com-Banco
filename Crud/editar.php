<?php
require 'configPdo.php'
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="editar.php" method="post">
        <h1>Editar perfil</h1>
        <label>Novo nome</label>
        <input type="text" name="novoNome">
        <label>Novo email</label>
        <input type="email" name="novoEmail">
        <button type="submit">Alterar</button>
    </form>
    <?php
    
    ?>
</body>

</html>