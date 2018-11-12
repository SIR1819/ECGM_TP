<?php
session_start();
if (isset($_SESSION['user'])) {
    header("location:ola.php");
}
session_write_close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="login.php" method="GET">
        <input type= "text" name="quemsoueu" placeholder="coloque o seu nome">
        <input type = "submit" value="inicia sessao">
    </form>
    
</body>
</html>