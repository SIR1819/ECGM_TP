<?php
/*
 * (c) 2016 Pedro Miguel Moreira | ESTG-IPVC
 */
session_start();
session_unset();
session_destroy();
session_write_close();
header("location:index.php");
?>