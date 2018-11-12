<?php
/**
 * (c) pedro moreira 2010-2016
 */
session_start();
session_unset();
session_destroy();
session_write_close();
header('location:selectX.php');
?>