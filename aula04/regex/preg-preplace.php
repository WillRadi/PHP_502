<?php

$cpf = '12345678900';

// Fazendo agrupamentos, para fazer o replace
$regex = '/([0-9]{3})([0-9]{3})([0-9]{3})([0-9]{2})/';

// \1 é o primeiro grupo
echo preg_replace($regex, '\1.\2.\3-\4', $cpf);

echo '<hr>';

$string = 'Dhessica legal';
// i fora da expressão deixa sem o case sentive
echo preg_replace('/dhessica/i', 'Will', $string);