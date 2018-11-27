<?php
require_once("connect.php");

//connDB

// define the query
$query = "SELECT * FROM produtos";

// query the DB
$result = $connDB->query($query);

// convert the result into json

$listOfProducts = Array();

while ($product = $result->fetch_object()) {
    $listOfProducts[] = $product;
}

//var_dump($listOfProducts);

echo json_encode($listOfProducts);

?>