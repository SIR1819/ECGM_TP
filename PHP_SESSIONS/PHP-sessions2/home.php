<?php
/*
 * (c) 2016 Pedro Miguel Moreira | ESTG-IPVC
 */
session_start();
// se não login -> index.php
// senão -> continua nesta

if(!isset($_SESSION['user'])) {
	header("location:index.php");
}

$thisuser = $_SESSION['user'];

session_write_close();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<style type="text/css">
		body {
			background-color: <?php echo $thisuser ?>;
			color : white;
		}
	</style>
</head>
<body>
<h1>Olá <?php echo $thisuser ?></h1>

<p><a href="fotos.php">as minhas fotos</a></p>
<p><a href="logout.php">logout</a></p>

</body>
</html>