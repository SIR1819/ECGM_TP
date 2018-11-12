<?php
/**
 * (c) pedro moreira 2010-2016
 */
session_start();

if(!isset($_SESSION['theme'])) {
	header('location:selectX.php');
	exit();
}

$theme = 		$_SESSION['theme'];
session_write_close();

$cssfile = 		"css/css".$theme.".css";

?>

<html>
<head>
<link rel="stylesheet" href=<?php echo $cssfile?>></link>
<link rel="stylesheet" href="css/common.css"></link>
</head>
<body>
<h3>page 1</h3>
<p><a href="content2.php">|page 2|</a> - <a href="selectX.php">|go home|</a></p>
<p class="copy">(c) 2010-2016 pedro moreira</p>


</body>
</html>