<?php 

	if (isset($_GET['destinatario']) && isset($_GET['asunto']) && isset($_GET['texto'])) {

		mail('danny.trabajos@gmail.com', $_GET['asunto'], $_GET['texto']);

		header('Location: index.php?codigo=1');

	}

 ?>