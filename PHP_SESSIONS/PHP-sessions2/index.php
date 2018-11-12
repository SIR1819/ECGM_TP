<?php
/*
 * (c) 2016 Pedro Miguel Moreira | ESTG-IPVC
 */
// inicia controlo por sessões
session_start();
// se sessão ativa -> redireciona para home
if (isset($_SESSION['user'])) {
	header("location: home.php");
	exit();
}
session_write_close();
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Sessões PHP 2</title>
</head>
<body>
<h1> quero aceder como </h1>
	<p><a href="login.php?user=red">lampião</a></p>
	<p><a href="login.php?user=blue">dragão</a></p>
	<p><a href="login.php?user=green">lagarto</a></p>
</body>
</html>
