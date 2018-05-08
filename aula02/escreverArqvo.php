<?php

echo '<pre>';

echo '<p>Difícil</p>';

//abrir no modo a, para escrever no final do arquivo
$arquivo = fopen('newfile.txt', 'a');

fwrite($arquivo, 'Olá Mundo;' . PHP_EOL);

fclose($arquivo);

echo '<p>Fácil</p>';

file_put_contents('newfile.txt', 'Olá Fácil' . PHP_EOL, FILE_APPEND);