<?php

header('Content-Type: text/html; charset=utf-8');

$pdo = require_once 'Conexao.php';
$conexao = Conexao::getInstance();

$sql = 'SELECT * FROM pessoas';

$statement = $conexao->query($sql);

// get all publishers
$leads = $statement->fetchAll(PDO::FETCH_ASSOC);


if ($leads) {
	foreach ($leads as $lead) {
        echo "<tr>";
        echo "<th>". $lead['id'] . "</th>";
        echo "<th>". $lead['nome'] . "</th>";
        echo "<th>". $lead['telefone'] . "</th>";
        echo "<th>". $lead['email'] . "</th>";
        echo "</tr>";
    }
}
