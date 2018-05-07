<?php

// Dado um array com 4 pessoas, quero que me mostrem:
// o mais velho
// o mais novo
// diferença de idade entre eles em dias.

$pessoas = [
	[
		'nome' => 'Heath Ledger',
		'data_nasc' => '19/05/1956',
	],
	[
		'nome' => 'Alfie Allen',
		'data_nasc' => '10/07/1993',
	],
	[
		'nome' => 'Taylor Kinney',
		'data_nasc' => '04/09/1979',
	],
	[
		'nome' => 'Audrey Hepburn',
		'data_nasc' => '13/07/1972',
	],
];

// meu:

// $base = new DateTime('1900-01-01');

// for ($i=0; $i < count($pessoas); $i++) {
// 	// $dataArr = explode('/', $pessoas[$i]['data_nasc']);
// 	// $date = new DateTime();
// 	// $date->setDate($dataArr[2], $dataArr[1], $dataArr[0]);

// 	// $dataStr = strtotime($pessoas[$i]['data_nasc']);
// 	// $date = new DateTime($dataStr);
// 	if ($date >= $base) {
// 		$novo = $date;
// 	}
// 	if ($date <= $base) {
// 		$velho = $date;
// 	}
// 	$base = $date;
// }

// echo 'novo <br>';
// var_dump($novo);
// echo '<br>';
// echo 'velho <br>';
// var_dump($velho);

// Lucas

echo "Pegar no Git o código completo..."

// echo PHP_EOL;
// foreach ($pessoas as $key => $pessoa) {
// 	$pessoa['data_nasc'] = DateTime::createFromFormat('d/m/Y', $pessoa['data_nasc']);
// 	// Devolve ao array, a data de nascimento em forma de DateTime
// 	// Se n houver essa linha, o formato da data fica apenas dentro do foreach
// 	$pessoas[$key] = $pessoa;
// }

// $novo = $pessoas[0];
// $velho = $pessoas[0];

// foreach ($pessoas as $pessoa) {
// 	if ($pessoa['data_nasc'] > $novo['data_']) {
		
// 	}
// }