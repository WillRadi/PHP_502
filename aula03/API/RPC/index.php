<?php 

require 'users.php';

$user = new User();

$dados = file_get_contents("php://input");

$dados = json_decode($dados,true);

switch ($dados['method']) {
	case 'list':
			$response = [
					'result' => $user->list(),
					'error'  => null,
					'id'     => $dados['id']
			];
			header('Content-type: application/json; charset=UTF-8');
			echo json_encode($response);
		break;
	case 'insert':
			$response = [
					'result' 	=> $user->insert($dados['params']),
					'error'		=> null,
					'id'		=> $dados['id']
			];
			header('Content-type: application/json; charset=UTF-8');
			echo json_encode($response);
	default:
		
		break;
}