<?php

echo '<pre>';
$string = 'col1;col2,col3/col4';

$cols = preg_split('/;|,|\//', $string);

print_r($cols);

echo "<hr>";
$data = '10-05-2018 11:13:12';
$colsData = preg_split('/-|\s|:/', $data);

print_r($colsData);
$dia = $colsData[0];
$mes = $colsData[1];
$ano = $colsData[2];
$hora = $colsData[3];
$minutos = $colsData[4];
$segundo = $colsData[5];

echo "<hr>";
echo "Agora são {$hora}:{$minutos}h, do dia {$dia}/{$mes} de {$ano}";