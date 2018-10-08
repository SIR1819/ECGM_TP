<?php


// declarar array 

$a = array("cenouras" => 2, "courgetes"=>0, "batatas" => 3);
asort($a);
ksort($a);
printArray2($a);



function printArray2($array) {
    foreach($array as $chave => $elemento) {
        // composição
        // echo '<p> elemento ['.$i.'] == '. $array[$i] . '</p>';
        echo '<p> elemento ['.$chave.']== '. $elemento . '</p>';
    }
}



?>