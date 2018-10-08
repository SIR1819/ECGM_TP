<?php
/* contador */

function incrementa() {
    global $conta;
    $conta = $conta + 1;
}

function incrementa2 ($valor) {
    $valor = $valor + 1;
}

function incrementa3 (&$valor) {
    $valor = $valor + 1;
}

function incrementa4($valor) {
    $valor = $valor + 1;
    return $valor;
}

@$conta = file_get_contents("contador.txt");
if ($conta === FALSE) {
    $conta = 1;
} else {
    //incrementa($conta) // funciona se declarada como global
    //incrementa2($conta) // not ok  - passa como valor
    //incrementa3($conta) // ok  - passa como ref
    //incrementa4($conta) // devolve novo valor (funcao pura)
    $conta = incrementa4($conta);
}
file_put_contents("contador.txt", $conta);


$lista = array();
$lista[] = "Edgar";
$lista[] = "Antony";
$lista[] = "Zé Cabra";
array_push($lista,"Maria Leal");
?>
<html>
    <head>
        <title>teste 2</title>
    </head>
    <body>
        <h1> Programa da Festa Sunset ESTG 1.outubro.18</h1>
        <?php
            for($i = 0; $i < sizeof($lista); $i++) {
                echo "<p>" . $lista[$i] . "</p>";
            }
        ?>
        <h1> Programa da Festa Sunset ESTG 2.outubro.18</h1>
        <?php
            foreach ($lista as $artista) {
                echo "<p>" . $artista . "</p>";
            }
        ?>
    <div> 
        <h6> 
        <?php 
        echo " página visitada " . $conta . " vezes"; 
        ?>
    </body>
</html>
