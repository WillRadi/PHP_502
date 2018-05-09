<?php

$dom = new DOMDocument();
$dom->load('../apostilas.xml');

// Localizando elementos
// 'apostila' pq é dentro desse nó que será add o outro elemento
$apostilas = $dom->getElementsByTagName('apostila');

// Apenas cria, não add ao XML
$pagina = $dom->createElement('pagina', 140);
// Adiciona o novo elemento ao XML
$apostilas->item(0)->appendChild($pagina);
// Mesma coisa, mas em uma linha śó
$apostilas->item(1)->appendChild($dom->createElement('pagina', 130));

// Salva de verdade o arquivo:
$dom->save('../apostilas.xml');
// Apenas para melhor visualização do xml;
header('content-type: text/xml');

// Só mostra como ficaria o elemento salvo
echo $dom->saveXML();