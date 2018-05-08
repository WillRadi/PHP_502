<?php

$li = PHP_EOL;

echo strtotime('now') . ' em Timestamp UNIX' . $li;
echo strtotime('10 november 1991') . $li;

echo '====================' . $li;

echo 'Date com Strtotime' . $li;
// last day of August, 2017
echo date('d/m/Y', strtotime('last day of August, 2017')) . $li;
echo date('d/m/Y H:i:s', strtotime('+1 day')) . $li;

echo date('d/m/Y', strtotime('+1 day', strtotime('10 november 1991'))) . $li;