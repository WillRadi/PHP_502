<?php

$pdo = new PDO("pgsql:host=localhost;dbname=novaaula","will","123");

$select = "SELECT * FROM users";

// Gera o objeto PDO Statement
$pdoStmt = $pdo->query($select);
// Gera o array com os dados do banco
$dados = $pdoStmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($dados as $user) {
	$arquivo = fopen('usuariosFamosos.csv', 'a');
	fwrite($arquivo, "{$user['name']},{$user['email']},{$user['pass']}" . PHP_EOL);
	echo 'Usuário ' . $user['name'] . ' escrito com sucesso' . '<br>';
}