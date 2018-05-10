<?php

// Usar só hash functions: ficam iguais

echo md5('123');
echo '<br>';
echo sha1('123');

// Fucionam melhor: hash function salt

$pass1 = password_hash('123', PASSWORD_BCRYPT);
$pass2 = password_hash('123', PASSWORD_BCRYPT);

if (password_verify('123', $pass1)) {
	echo 'ok';
} else {
	echo 'fail';
}