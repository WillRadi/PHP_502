<?php

// Função q altera o php.ini
ini_set('soap.wsdl_cache_enabled', 0);

$soapClient = new soapClient()