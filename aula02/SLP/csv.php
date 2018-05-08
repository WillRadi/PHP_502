<?php

$arquivo = new SplFileObject('../../Exercícios/aula02/Ex-Arquivos/usuariosFamosos.csv');

// Leia o CSV e se achar linhas em branco, pule elas.
// para pular linhas em brando, precisa do Read ahead
$arquivo->setFlags(SplFileObject::READ_CSV | SplFileObject::SKIP_EMPTY);

echo '<pre>';

// foreach ($arquivo as $linha) {
// 	print_r($linha);
// }

while (!$arquivo->eof()) {
	$linha = $arquivo->fgetcsv(',');
	// print_r($linha);

	// Pega o conteúdo do array e passa para a lista de variáveis q passei nos parâmetros
	// "Estas vaíáveis recebem o array $linha"
	list($nome, $email, $senha) = $linha;
	echo 'Nome: ' . $nome . '<br>';
	echo 'E-mail: ' . $email . '<br>';
	echo 'Senha: ' . $senha . '<br>';
	echo '<hr>';
}