<?php
session_start();

$activeSession=true;
if(!isset($_SESSION['theme'])) {
	$activeSession=false;
}

if($activeSession) {
	// regista a sessao e define css em conformidade
	$theme = $_SESSION['theme'];
	
} else {
	// tema por defeito (sem sessão ativa)
    $theme = '0';
}
$cssfile = "css/css".$theme.".css";
session_write_close();
?>

<html>
<head>
<meta charset="UTF-8"/>
<title>BASIC SESSIONS</title>
<link rel="stylesheet" href="<?php echo $cssfile ?>"></link>
<link rel="stylesheet" href="css/common.css"></link>
</head>
<body>
<?php 
	// se existe uma sessão ativa
	if ($activeSession) 
		include('inc/info.inc'); 
	else 
		include('inc/form.inc');
?>
<p class="copy">(c) 2010-2016 pedro moreira</p>
</body>
</html>