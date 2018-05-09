<?php

$dom = new DOMDocument();
$dom->load('../apostilas.xml');

$apostilas = $dom->getElementsByTagName('apostila');

// Se o atributo existe, ele altera. Se não, adiciona

// Alterar atributo existente
$apostilas->item(0)->setAttribute('id', 20);
// Adicionando atributo
$apostilas->item(0)->setAttribute('ano', 2018);

$dom->save('../apostilas.xml');

header('content-type: text/xml');
echo $dom->saveXML();