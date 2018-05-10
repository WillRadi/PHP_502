<?php

$apostilas = new SimpleXmlElement('../apostilas.xml',null,true);

unset($apostilas->apostila[0]->paginas);
unset($apostilas->apostila[1]->paginas);
unset($apostilas->apostila[2]->paginas);

header('content-type: text/xml');

echo $apostilas->asXML();