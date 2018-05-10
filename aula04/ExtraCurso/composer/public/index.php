<?php

require_once '../vendor/autoload.php';

// Application faz as vezes do FrontController
$app = new Silex\Application();

require_once '../routes/routes.php';

$app->run();