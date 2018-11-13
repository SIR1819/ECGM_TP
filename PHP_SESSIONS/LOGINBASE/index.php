<?php
session_start();

// se existe login
if (isset($_SESSION['username'])) {
    header("location:p1.php");
    session_write_close();
    exit();
} 

// se não existe ... continuo com forms

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
    <form id="ilogin" name="login" action="login.php" method="POST">
        <label for="iusername">username</label>
        <input minlength="3" maxlength="10" required="required" type="text" name="username" id="iusername">
        <label for="ipassword">password</label>
        <input minlength="3" maxlength="6" required="required" type="password" name="password" id="ipassword">
        <input type="submit" value="Entrar">
        <input type="reset" value="Limpar">
    </form>
</body>
</html>