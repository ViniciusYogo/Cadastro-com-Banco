<?php 
require 'configPdo.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="excluir.php" method="post">
        <label>nome</label>
        <input type="text" name="inputNome" required>
        <button type="submit">Excluir</button>
    </form>

    <?php
        $inputNome = $_POST['inputNome'];
    if($inputNome != ""){
        $sql = $pdo->prepare("DELETE FROM usuario WHERE nome= :nome");
        $sql->bindParam(':nome', $inputNome);
        $sql->execute();
    }
    ?>
</body>
</html>