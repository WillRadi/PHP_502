<?php

$pdo = new PDO("pgsql:host=localhost;dbname=novaaula","will","123");

$select = "SELECT * FROM users";
$pdoStmt = $pdo->query($select);
$dados = $pdoStmt->fetchAll(PDO::FETCH_ASSOC);

$xml = new SimpleXmlElement('<?xml version="1.0" encoding="UTF-8"?><usuarios></usuarios>');
$xml->addChild('usuario');

for ($i=0; $i < count($dados) ; $i++) { 
	foreach ($dados as $user) {
		// $xml->usuario[$i]->attributes()->addAttribute('id', $i++);
		$xml->addChild('id', $user['id']);
		$xml->addChild('Nome', $user['name']);
		$xml->addChild('E-mail', $user['email']);
		$xml->addChild('Senha', $user['pass']);

		echo '<pre>';
		var_dump($xml);
		die();
	}
}

header('content-type: text/xml');

echo $xml->asXML();