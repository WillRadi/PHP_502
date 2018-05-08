<?php

$arquivo = new SplFileObject('arquivo.txt', 'a');

$arquivo->fwrite('Olá, php');