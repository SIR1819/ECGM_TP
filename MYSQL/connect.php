<?php

$userDB = "baruser";
$passDB = "baruser";
$hostDB = "localhost";
$nameDB = "barecgm";


// connect
@$connDB = new mysqli($hostDB,$userDB,$passDB,$nameDB);

//teste for connection errors
if ($connDB->connect_errno) {
    die ("error : ". $connDB->connect_error);
}
//echo "Connected";
?>