<?php

$app->get('/', function() {
	return 'olá';
});

$app->get('/ola', function() {
	return \App\Controller\HomeController\HomeController::ola();
});