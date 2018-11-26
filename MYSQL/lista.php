<?php
include_once("connect.php");

// sql
$query = "SELECT * FROM produtos";

// query 
$result = $connDB->query($query);

// check for errors
if ($connDB->errno) {
    exit ("query error");
} else {
    // fetch results
    while($product = $result->fetch_row()) {
        echo "<li>".$product[1]." : ".$product[2]."</li>";
    }

    // fetch results as object
    $result->data_seek(0);
    while($product = $result->fetch_object()) {
        echo "<li>".$product->designacao." : ".$product->qtd."</li>";
    }
}










?>