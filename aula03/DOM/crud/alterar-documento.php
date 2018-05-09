<?php

echo '<pre>';

$dom = new DOMDocument();
$dom->load('../apostilas.xml');

// 1 - Localizar doc:
// Retorna quantas vezes foi encontrada a tag
$titulo = $dom->getElementsByTagName('titulo');

// Alterando o priemiro título q ele encontrou:
// node Value é onde há o valor do título:
$titulo->item(0)->nodeValue = 'PHP é nóis';
$titulo->item(1)->nodeValue = 'DOM Java';
$titulo->item(2)->nodeValue = 'Ruby e DOM';

// salva o arquivo:
$dom->save('../apostilas.xml');

print_r($titulo);
echo '<hr>';
print_r($titulo->item(0));
echo '<hr>';
print_r($dom->saveXML());
echo '<hr>';