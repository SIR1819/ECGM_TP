<?php
//iniciar o controlo das sessoes
session_start();

if (isset($_SESSION['user'])) {
    header("location:ola.php");
} else {
    $_SESSION['user'] = $_GET['quemsoueu'];
    header("location:ola.php");
}

//encerrar o controlo de sessoes
session_write_close();
?>