<?php

// Data no padrão brasileiro d/m/Y
// Se data de vencimento > que data atual
// mostrar a msg 'Pode pagar o boleto'
// Senão, boleto está vencido
// mostra a msg 'Boleto vencido em X dias'
// Form ou readline

$venc = readline('Informe a data de vencimento (dd/mm/aaaa): ' . PHP_EOL);
//$venc = '05/05/2018';
$venc = DateTime::createFromFormat('d/m/Y', $venc);
//$hoje = DateTime::createFromFormat('d/m/Y', '08/05/2018');
$hoje = new DateTime(date('Y-m-d') . '00:00:00');

if ($venc->format('l') == "Saturday") {
	$venc->add(new DateInterval('P2D'));
}

if ($venc->format('l') == 'Sunday') {
	$venc->modify('+1 day');

}


if ($venc < $hoje) {
	$diferenca = $venc->diff($hoje);
	echo $diferenca->format('Boleto vencido há %a dias') . PHP_EOL;
} else {
	echo "Pode pagar" . PHP_EOL;
}