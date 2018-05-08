<?php

$arquivo = fopen('newfile.php', 'w+');

// LOCK_SH - Lock compartilhado
// LOCK_EX - Lock exclusivo
// LOCK_UM - Libera lock

if (flock($arquivo, LOCK_EX)) {
	fwrite($arquivo, 'Olá!!');
	flock($arquivo, LOCK_UN);
} else {
	echo 'Arquivo bloquado';
}

fclose($arquivo);