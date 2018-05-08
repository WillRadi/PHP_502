<?php

$apostilas = new SimpleXmlElement('../apostilas.xml',null,true);
$apostilas->apostila[0]->titulo = 'Dominando PHP';
$apostilas->apostila[1]->titulo = 'Fodão do Java';
$apostilas->apostila[2]->titulo = 'Rubyzando';

$apostilas->apostila[0]->topicos->topico[0] = 'Baby PHP';

// altera na linha 4 e salva um novo doc com o saveXML. Salvando no mesmo caminho, substitui
$apostilas->saveXML('../apostilas.xml');

header('content-type: text/xml');

echo $apostilas->asXML();