<form method="POST">
	<input type="text" name="comentario">
	<input type="submit">
</form>

<?php

if ($_POST) {
	// errado
	echo $_POST['comentario'];
	//correto
	echo strip_tags($_POST['comentario']);
}