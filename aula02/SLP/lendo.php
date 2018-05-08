<?php

// por padrão, o modo de leitura é o 'r';
$arquivo = new SplFileObject('arquivo.txt');

echo '<pre>';

while (!$arquivo->eof()) {
	$linha = $arquivo->fgets();
	echo nl2br($linha);
}

echo '<hr>';