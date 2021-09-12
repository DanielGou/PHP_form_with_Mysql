<?php

header('Content-Type: text/html; charset=utf-8');

$pdo = require_once 'Conexao.php';
$conexao = Conexao::getInstance();

// pegar os nomes dos campos que você passou pela requsição
$id = $_POST["id"];
$nome = $_POST["name"];
$phone = $_POST["phone"];
$email = $_POST["email"];


$sql = "update pessoas set
        nome = '".$nome."', email = '".$email."',telefone = '".$phone."'
        where id = ".$id;

$statement = $conexao->prepare($sql);

$statement->bindValue(':id', $id, PDO::PARAM_INT);
$statement->bindValue(':nome', $nome);
$statement->bindValue(':telefone', $phone);
$statement->bindValue(':email', $email);

if ($statement->execute()) {
	echo 'The publisher has been updated successfully!';
}

?>