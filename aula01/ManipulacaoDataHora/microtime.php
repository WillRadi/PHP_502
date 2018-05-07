<?php

function cronometro()
{
	return microtime(true);
}

$start = cronometro();

for ($i=0; $i < 10000; $i++) { 
	$i = $i * $i;
}

$end = cronometro();

echo 'Gastou = ' . ($end - $start) . ' segundos' . PHP_EOL;