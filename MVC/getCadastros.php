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
        echo "<td>". $lead['id'] . "</td>";
        echo "<td>". $lead['nome'] . "</td>";
        echo "<td>". $lead['telefone'] . "</td>";
        echo "<td>". $lead['email'] . "</td>";
        echo "</tr>";
    }
}
