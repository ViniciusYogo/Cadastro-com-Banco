
<?php

/*Criando o banco*/


try {
    $pdo = new PDO("mysql:dbname=rohoot;host=localhost:3306", "root", "cimatec");
} catch (Exception $e) {
    echo "Erro ao conectar ao banco ".$e->getMessage()."\n";
}
?>




