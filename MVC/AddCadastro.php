<?php

header('Content-Type: text/html; charset=utf-8');

$pdo = require_once 'Conexao.php';
$conexao = Conexao::getInstance();

// pegar os nomes dos campos que você passou pela requsição
$nome = $_POST["name"];
$phone = $_POST["phone"];
$email = $_POST["email"];

// inserir no banco: https://www.phptutorial.net/php-pdo/php-pdo-insert/

$sql = 'INSERT INTO pessoas(nome, telefone, email) VALUES(:nome, :telefone, :email)';

$statement = $conexao->prepare($sql);

$statement->execute([
	':nome' => $nome,
	':telefone' => $phone,
	':email' => $email
]);

$publisher_id = $conexao->lastInsertId();

echo 'O registro ' . $publisher_id . ' foi inserido';

// desafio extra: fazer sistema que permite adicionar, ver uma lista de registros, editar e excluir
?>