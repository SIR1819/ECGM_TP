<?php

$a = 1;
$b = "1";
$c = "3abc";
$d = 2;
$e = "abc4";
$f = "1.0";

echo $a + $b; // 2
echo "<hr/>";
echo $a . $d; // "12"
echo "<hr/>";
echo $a + $b + $c; // 5
echo "<hr/>";
echo $c + $e; // 3 + 0 = 3
echo "<hr/>";


// igualdade
if ($a == $f) {
    echo "São Iguais";
} else {
    echo "São Diferentes";
}

echo "<hr/>";
// identidade
if ($a === $f) {
    echo "São Idênticos";
} else {
    echo "Não são idênticos";
}

?>