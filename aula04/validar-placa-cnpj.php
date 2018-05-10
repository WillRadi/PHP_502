<?php

$placa = 'ABC-1234';
$cnpj = '64.605.494/0001-10';
$celular = '(11)90000-1234';

$regexPlaca 	= '/[A-Z]{3}-[0-9]{4}/';
$regexCnpj 		= '/[0-9]{2}\.[0-9]{3}\.[0-9]{3}\/0{3}[0-9]-[0-9]{2}/';
$regexCelular 	= '/\([0-9]{2}\)[0-9]{5}-[0-9]{4}/';

echo 'Placa<br>';
if (preg_match($regexPlaca, $placa)) {
	echo 'Placa válida';
} else {
	echo 'Placa inválida';
}
echo '<hr>';

echo 'CNPJ<br>';
if (preg_match($regexCnpj, $cnpj)) {
	echo 'CNPJ válido';
} else {
	echo 'CNPJ inválido';
}
echo '<hr>';

echo 'Celular<br>';
if (preg_match($regexCelular, $celular)) {
	echo 'Celular válido';
} else {
	echo 'Celular inválido';
}
echo '<hr>';