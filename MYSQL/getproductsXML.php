<?php
require_once("connect.php");

//connDB

// define the query
$query = "SELECT * FROM produtos";

// query the DB
$result = $connDB->query($query);

// convert the result into json

// $listOfProducts = Array();

$XML = new SimpleXMLElement("<produtos></produtos>");

while ($product = $result->fetch_object()) {
    $novoProdutoXML = $XML->addChild("produto");
    $novoProdutoXML->addAttribute("prodid",$product->id);
    $novoProdutoXML->addChild("designacao", $product->designacao);
    $novoProdutoXML->addChild("preco", $product->preco);
    $novoProdutoXML->addChild("quantidade", $product->qtd);
}

//var_dump($listOfProducts);

//echo json_encode($listOfProducts);
header("Content-Type: application/xml");
echo $XML->asXML();

?>