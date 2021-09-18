<?php

header('Content-Type: text/html; charset=utf-8');

$pdo = require_once 'Conexao.php';
$conexao = Conexao::getInstance();

// pegar os nomes dos campos que você passou pela requsição
$id = $_GET["id"];

$sql = 'DELETE FROM pessoas
        WHERE id = :id';

$statement = $conexao->prepare($sql);

// execute the statement
if ($statement->execute([
        ':id' => $id,
])) {
	echo 'publisher id ' . $id . ' was deleted successfully.';
}

?>