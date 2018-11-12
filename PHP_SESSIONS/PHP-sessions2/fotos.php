<?php
/*
 * (c) 2016 Pedro Miguel Moreira | ESTG-IPVC
 */
session_start();
// se não existe sessão ativa -> index.php
if(!isset($_SESSION['user'])) {
	header("location:index.php");
}

$thisuser = $_SESSION['user'];

session_write_close();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Fotos</title>
	<style type="text/css">
		body {
			background-color: <?php echo $thisuser ?>;
			color : white;
		}
	</style>
</head>
<body>
	<h1>Olá <?php echo $thisuser ?></h1>
	<img src="images/<?php echo $thisuser.".jpg"?>"/>
	<p><a href="home.php">Página Principal</a></p>
	<p><a href="logout.php">logout</a></p>
</body>
</html>