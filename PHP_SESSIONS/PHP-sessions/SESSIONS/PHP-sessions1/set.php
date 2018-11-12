<?php
/**
 * (c) pedro moreira 2010-2016
 */
session_start();

// se nao existe sessão e foi enviada selecao
if(!isset($_SESSION['theme']) && isset($_POST['ftheme'])) {
	// configura informação de sessao (tema)
	$_SESSION['theme'] = $_POST['ftheme'];
}

session_write_close();

header('location:selectX.php');
?>

