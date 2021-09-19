<?php

header('Content-Type: text/html; charset=utf-8');

$pdo = require_once 'Conexao.php';
$conexao = Conexao::getInstance();

// pegar os nomes dos campos que você passou pela requsição
$id = $_GET["id"];

if(empty($id)){
        echo "<div style='color: red; text-align: center;'>Id invalido</div>";
        return;
}

$sql = 'DELETE FROM pessoas
        WHERE id = :id';

$statement = $conexao->prepare($sql);

// execute the statement
if ($statement->execute([
        ':id' => $id,
])) {
        echo  "<div style='color: lime; text-align: center;'>".'publisher id ' . $id . ' was deleted successfully.'."</div>";
}

?>