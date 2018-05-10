<?php

$dom = new DOMDocument();
$dom->load('../apostilas.xml');

$paginas = $dom->getElementsByTagName('pagina');

// Removendo elemento - ParentNode vai para o elemtno pai. Assim, possibilita deletar o "filho"
// Lembrar que poderia ter acessado diretamente o pai
$paginas->item(0)->parentNode->removeChild($paginas->item(0));

$dom->save('../apostilas.xml');

header('content-type: text/xml');
echo $dom->saveXML();