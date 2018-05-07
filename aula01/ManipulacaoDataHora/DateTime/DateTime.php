<?php

function ver($var)
{
	var_dump($var);
	echo '==================' . PHP_EOL;
}

$atual = new DateTime();
ver($atual);

$especifico = new DateTime('1991-10-01');
ver($especifico);

$texto = new DateTime('+1 month');
ver($texto->format('d/m/Y H:i:s'));

$especifico->modify('22-12-2005');
ver($especifico->format('d/m/Y'));

$especifico->modify('+1 year');
ver($especifico->format('d/m/Y'));

$feb = new DateTime('2020-02-29');
$feb->modify('+1 year');
ver($feb->format('d/m/Y'));

$feb->setDate(2000, 01, 01);
$feb->setTime(15, 01, 01);
ver($feb->format('d/m/Y H:i:s'));

// $fuso = new DateTimeZone('America/New_York');
$fuso = new DateTimeZone('Europe/Moscow');
$atual->setTimeZone($fuso);
ver($atual);

ECHO '==== INTERVALO ===================== DA HORA ====' . PHP_EOL;

// P2Y = Períoro de 2 (Y)anos
// P2D = Dias
// P2M = Meses
// P2W = Semanas

// PT2H = Horas
// PT2M = Minutos
// PT2S = Segundos

// P3YT8M - Período de 3 anos e 8 minutos

$intervalo = new DateInterval('P2Y');
ver($intervalo);

$dataAtual = new DateTime();
$dataNasci = new DateTime('1991-11-10');

// Função diff
$inter = $dataAtual->diff($dataNasci);

ver($dataAtual->format('d/m/Y'));
ver($dataNasci->format('d/m/Y'));
ver($inter->format('você nasceu há %a de dias'));
ver($inter->format('%y anos de vida'));

// Funções add e sub - Sempre esperam um DataInterval como parâmetro
$dataAtual->add(new DateInterval('P7D'));
ver($dataAtual->format('d/m'));

$dataAtual->sub(new DateInterval('P7D'));
ver($dataAtual->format('d/m'));

ver($dataAtual >= $dataNasci);

