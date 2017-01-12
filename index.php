<?php 
	$codigo = '0';
	
	if (isset($_GET['codigo'])) {
		$codigo = '1';
	}

 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="enviar_correo.php" method="get">
		<input type="mail" name="destinatario" placeholder="Destino">
		<input type="texty" name="asunto" placeholder="Asunto">
		<textarea name="texto" id="" cols="30" rows="10" placeholder="Texto"></textarea>
		<input type="submit" value="Enviar correo">
	</form>
	<!--Comentario prueba Github-->
<script>
	<?php if ($codigo == '1') { ?>
		alert("Su correo fue enviado exitosamente");
	<?php  } ?>
</script>
</body>
</html>