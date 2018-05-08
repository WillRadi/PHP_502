<?php

echo '<pre>';
echo '<p>Lendo partes em CSV</p>';

$arquivo = 'newfile.txt';
$tamanho = filesize($arquivo);

echo '<p>Tamanho do arquivo em bytes: ' . $tamanho . '</p>';

$stream = fopen($arquivo, 'r');

$csv = [];

while (!feof($stream)) {
	$linha = fgets($stream);
	$csv[] = explode(';', $linha);
}

fclose($stream);

print_r($csv);