<form method="POST">
	<p><input type="text" name="cep"></p>
	<p><input type="submit" value="Buscar"></p>
</form>

<?php

if ($_POST) {
	$cep = $_POST['cep'];
	$cep = str_replace('-', '', $cep);

	$url = "https://viacep.com.br/ws/{$cep}/json/";

	$retorno = file_get_contents($url);
	$end = json_decode($retorno);
}
?>
<?php if ($_POST) : ?>
<p>Rua: <?= $end->logradouro?></p>
<?php endif ?>