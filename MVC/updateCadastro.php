<?php

header('Content-Type: text/html; charset=utf-8');

$pdo = require_once 'Conexao.php';
$conexao = Conexao::getInstance();

// pegar os nomes dos campos que você passou pela requsição
$id = $_POST["id"];
$nome = $_POST["name"];
$phone = $_POST["phone"];
$email = $_POST["email"];

//validando dados


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

$sql = 'update pessoas 
        set nome = :nome, email = :email, telefone = :telefone
        where id = :id';

$statement = $conexao->prepare($sql);

if ($statement->execute([
        ':id' => $id,
	':nome' => $nome,
	':telefone' => $phone,
	':email' => $email
])) {
	echo 'The publisher has been updated successfully!';
}

?>