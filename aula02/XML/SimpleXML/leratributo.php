<?php

$apostilas = new SimpleXmlElement('../apostilas.xml',null,true);

echo '<pre>';
// retorna todos os elementos do atributo
// print_r($apostilas->apostila[0]->attributes()->id = 10);

$apostila = $apostilas->apostila[0]->attributes()
$apostila->id = 30;