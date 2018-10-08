<?php


$a = array(1,2,3);
$b = array(3,2,1);

$c = array(3,4,5,6);

$d = $a + $b; //   1,2,3
printArray2($d);
$d = $b + $a; // 3,2,1
printArray2($d);
$d = $a + $c; // 1,2,3,6
printArray2($d);
$d = $c + $a; // 3,4,5,6
printArray2($d);



//sort($b);

$aa = array("ana"=>24, "mariana" => 22, "mateus"=>25);
$bb = array("mateus"=>25, "ana"=>24, "mariana" => 22);

//ksort($bb);

// igualdade
if ($aa == $bb) {
    echo "São Iguais";
} else {
    echo "São Diferentes";
}

echo "<hr/>";
// identidade
if ($aa === $bb) {
    echo "São Idênticos";
} else {
    echo "Não são idênticos";
} 

function printArray2($array) {
    echo ("<hr/>");
    foreach($array as $chave => $elemento) {
        // composição
        // echo '<p> elemento ['.$i.'] == '. $array[$i] . '</p>';
        echo '<p> elemento ['.$chave.']== '. $elemento . '</p>';
    }
}

?>