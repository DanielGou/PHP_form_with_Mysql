<?php

header('Content-Type: text/html; charset=utf-8');

$pdo = require_once 'Conexao.php';
$conexao = Conexao::getInstance();

// pegar os nomes dos campos que você passou pela requsição
$nome = $_POST["name"];
$phone = $_POST["phone"];
$email = $_POST["email"];

//validar dados

if(!is_string($nome) || empty($nome)){
	echo "Nome invalido";
	return;
}

if(!filter_var($email, FILTER_VALIDATE_EMAIL) || empty($email)){
	echo "Email invalido";
	return;

}

if (!preg_match('/^\([0-9]{2}\)?\s?[0-9]{4,5}[0-9]{4}$/', $phone) || empty($phone)){
	echo "Telefone invalido";
	return;
}

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