<?php

$site = file_get_contents('https://www.4linux.com.br/');

$regex = '/[0-9]{2}\s[0-9]{4,5}-[0-9]{4}/';

preg_match_all($regex, $site, $encontrados);

echo '<pre>';
var_dump($encontrados);