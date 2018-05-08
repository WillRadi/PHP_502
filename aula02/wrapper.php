<?php

$google = file_get_contents('http://www.google.com.br', 'r');
echo $google;

$gmail = fopen('http://www.gmail.com', 'r');


// teminar de ver como funcionaria o str_replace
while (!feof($gmail)) {
	$linha = fgts($gmail);
	$linha = str_replace('wellcome', 'Bem Vindo', ____)
}