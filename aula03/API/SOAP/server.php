<?php

// Função q altera o php.ini
ini_set('soap.wsdl_cache_enabled', 0);

require 'users.php';

$users = new User();

$soapServer = new soapServer('users.wsdl');
$soapServer->setObject($users);
$soapServer->handle();