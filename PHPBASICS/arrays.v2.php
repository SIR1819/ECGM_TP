<?php


// declarar array 

$a = array();

$b = array(1,2,3);
// acrescentar elementos no final do array
$b[]=5;
array_push($b,8);
$b[100] = 10;


// nota : vai reconverter indices do array para sequencias 
// acrescenta no inicio
array_unshift($b,100);
sort($b);
// retira do inicio
$retirado = array_shift($b);


//splice : permite retirar e/ou introduzir elementos

$c = array(1,2,3,6,7,8);

$d = array(4,5);


printArray2($c);
echo("<hr/>");
// retira 3,6
// array_splice($c,2,2);

// retira 3,6 e substitui por 4,5
//array_splice($c,2,2,$d);
//printArray2($c);

// inserir, sem retirar
array_splice($c,3,0,$d);
printArray2($c);





// cuidado!!! (o cão morde)
function printArray1($array) {
    for($i = 0; $i < sizeof($array); $i++) {
        // composição
        echo '<p> elemento ['.$i.'] == '. $array[$i] . '</p>';
    }
}

function printArray2($array) {
    foreach($array as $chave => $elemento) {
        // composição
        // echo '<p> elemento ['.$i.'] == '. $array[$i] . '</p>';
        echo '<p> elemento ['.$chave.']== '. $elemento . '</p>';
    }
}

//printArray2($b);


//var_dump($a);
//echo ("<br/>");
//var_dump($b);

?>