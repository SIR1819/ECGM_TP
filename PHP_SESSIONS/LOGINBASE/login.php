<?php
session_start();

$PASS = "12345";
$USER = "pedro";
if(isset($_SESSION['username'])) {
    header("location:index.php");
} else if (!(isset($_POST['username']) || !(isset($_POST['password'])))) {
    header("location:index.php");
} else if ($_POST['username'] !== $USER || $_POST['password'] !== $PASS ) {
    header("location:index.php");
} else {
    $_SESSION['username'] = $_POST['username'];
    header("location:index.php");
}
session_write_close();
exit();
?>