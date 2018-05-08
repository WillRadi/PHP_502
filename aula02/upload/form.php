<form method="POST" enctype="multipart/form-data">
	<!-- Definiria o tamanho máximo do arquivo -->
	<!-- <input type="hidden" name="MAX_FILE_SIZE" value=""> -->

	<input type="file" name="arquivo">
	<input type="submit" value="Enviar">
</form>

<?php

//var_dump($_POST);
//var_dump($_FILES);

if ($_POST || $_FILES) {
	if (UPLOAD_ERR_OK === $_FILES['arquivo']['error']) {
		// Dá nome ao arquivo
		$nome = basename($_FILES['arquivo']['name']);
		// move para o local correto
		$movido = move_uploaded_file($_FILES['arquivo']['tmp_name'], "fotos/{$nome}");

		if ($movido) {
			echo '<p>Salvo com sucesso</p><hr>';
			// Exibe a imagem no html
			// src deve ser o caminho do local.. 
			echo "<img src='fotos/{$nome}' height='42' width='42'>";
		}
	}
}