<?php

echo '<p>Difícil<p>';

$arquivo = fopen('newfile.txt', 'r');

$conteudo = fread($arquivo, filesize('newfile.txt'));

echo nl2br($conteudo);

fclose($arquivo);

echo '<hr>';

echo '<p>Difícil - 2<p>';

$arquivo = fopen('newfile.txt', 'r');

while (!feof($arquivo)){
	$linha = fgets($arquivo);
	echo nl2br($linha);
}

fclose($arquivo);

echo '<hr>';

echo '<p>Fácil<p>';

$arquivo = file_get_contents('newfile.txt');
echo nl2br($arquivo);
echo '<hr>';

// echo '<p>Lendo em partes<p>';

// $arquivo = 'arquivo.txt';
// $tamanho = filesize($arquivo);

// echo 'Tamanho do arquivo em bytes: ' . $tamanho;

// $stream = fopen($arquivo, 'r');

// // Ler o arquivo de 10 em 10 bytes:
// while (($pedaco = fread($stream, 10)) !false()) {
// 	echo nl2br($arquivo);
// }