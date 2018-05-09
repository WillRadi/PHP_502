<?php
echo '<pre>';
$pdo = new PDO("pgsql:host=localhost;dbname=novaaula","will","123");

$select = "SELECT * FROM users";
$pdoStmt = $pdo->query($select);
$dados = $pdoStmt->fetchAll(PDO::FETCH_ASSOC);

$xml = '<?xml version="1.0" encoding="UTF-8"?><users></users>';

$dom = new DOMDocument();

$users = $dom->getElementsByTagName('users');

foreach ($dados as $user) {
	$userItem = $dom->createElement('user');
	$nameItem = $dom->createElement('name', $user['name']);
	$emailItem = $dom->createElement('email', $user['email']);
	$passItem = $dom->createElement('pass', $user['pass']);
	$idItem = $dom->createElement('id', $user['id']);

	$userItem->appendChild()...
}

print_r($dom);