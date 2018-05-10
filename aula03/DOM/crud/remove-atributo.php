<?php

$dom = new DOMDocument();
$dom->load('../apostilas.xml');

$apostilas = $dom->getElementsByTagName('apostila');

// Se o atributo existe, ele altera. Se não, adiciona

// Localiza e deleta:
$apostilas->item(0)->removeAttribute('ano');

$dom->save('../apostilas.xml');

header('content-type: text/xml');
echo $dom->saveXML();