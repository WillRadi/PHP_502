<?php

require 'users.php';

$user = new User();

$dados = file_get_contents("php://input");
$dados = json_decode($dados,true);

// descobrir qual a requisiçao que veio do cliente
$method = $_SERVER['REQUEST_METHOD'];

switch ($method) {
	case 'GET':
		// $id = $_GET['id'] ?? null;
		// if ($id) {
		// 	$data = $user->find($id);
		// } else {
		// 	$data = $user->list();
		// }
		if ($user->list()) {
			header('HTTP/1.1 200');
			$response = [
				'status'	=> 'ok',
				'data'		=> $user->list(),
				'message'	=> ''
			];
		} else {
			header('HTTP/1.1 204');
			$response = [
				'status'	=> 'erro',
				'data' 		=> '',
				'message'	=> 'User not found'
			];
		}
		break;
	case 'POST':
		header('HTTP/1.1 200');
			$response = [
				'status'	=> 'ok',
				'data'		=> $user->insert($dados),
				'message'	=> 'Cadastrado com sucesso!'
			];
		break;
	case 'PUT':
		echo 'put';
		break;
	case 'DELETE':
		echo 'delete';
		break;
}

header('Content-type: application/json; charset=UTF-8');
echo json_encode($response);