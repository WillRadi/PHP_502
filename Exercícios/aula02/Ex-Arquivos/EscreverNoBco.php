<?php

$pdo = new PDO("pgsql:host=localhost;dbname=novaaula","will","123");

$csv = fopen('dataset.csv', 'r');

// Enquanto n chegar ao final, ele executa o while
while (!feof($csv)){
	// fgtes lê linha a linha
	$linha = fgets($csv);
	$users[] = explode(',', $linha);
}

foreach ($users as $user) {
	$senha 	= $user[0];
	$nome 	= $user[1];
	$email	= trim(stripcslashes($user[2]));

	$sql = "INSERT INTO users (name,email,pass) VALUES ('{$nome}', '{$email}', '{$senha}')";

	$pdo->exec($sql);
}