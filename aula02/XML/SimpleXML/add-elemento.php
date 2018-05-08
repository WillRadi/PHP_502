<?php

$apostilas = new SimpleXmlElement('../apostilas.xml',null,true);

// elemento 'paginas' e o valor dele
$apostilas->apostila[0]->addChild('paginas', 150);
$apostilas->apostila[1]->addChild('paginas', 135);
$apostilas->apostila[2]->addChild('paginas', 127);

// add elementos dentro de elementos capítulos, capítulo

// Cria o objeto capitulo
// Dentro de capítulos, cria-se um objeto simplexmlobj
$capitulosPHP = $apostilas->apostila[0]->addChild('capitulos');

$capitulosPHP->addChild('capitulo', '1 - Inicio');
$capitulosPHP->addChild('capitulo', '2 - Ambiente');
$capitulosPHP->addChild('capitulo', '3 - Próximo passo');

$capitulosJava = $apostilas->apostila[1]->addChild('capitulos');

$capitulosJava->addChild('capitulo', '1 - Inicio');
$capitulosJava->addChild('capitulo', '2 - Ambiente');
$capitulosJava->addChild('capitulo', '3 - Próximo passo');

$capitulosRuby = $apostilas->apostila[2]->addChild('capitulos');

$capitulosRuby->addChild('capitulo', '1 - Inicio');
$capitulosRuby->addChild('capitulo', '2 - Ambiente');
$capitulosRuby->addChild('capitulo', '3 - Próximo passo');

$apostilas->saveXML('../apostilas.xml');

header('content-type: text/xml');

echo $apostilas->asXML();