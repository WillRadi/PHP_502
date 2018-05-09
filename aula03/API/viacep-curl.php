<form method="POST">
	<p><input type="text" name="cep"></p>
	<p><input type="submit" value="Buscar"></p>
</form>

<?php

if ($_POST) {
	$cep = $_POST['cep'];
	$cep = str_replace('-', '', $cep);

	$url = "https://viacep.com.br/ws/{$cep}/json/";

	$curl = curl_init();

	curl_setopt($curl, CURLOPT_URL, $url);

	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

	$retorno = curl_exec($curl);

	curl_close($retorno);

	$end = json_decode($retorno);
}
?>
<?php if ($_POST) : ?>
<p>Rua: <?= $end->logradouro?></p>
<?php endif ?>