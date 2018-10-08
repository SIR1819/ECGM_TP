<?php


// declarar array 

$a = array();

$b = array(1,2,3);
// acrescentar elementos no final do array
$b[]=5;
array_push($b,8);


for($i = 0; $i < sizeof($b); $i++) {
    echo "<p> == $b[$i] </p>";
    echo '<p> == $b[$i] </p>';
}

var_dump($a);
echo ("<br/>");
var_dump($b);

?>