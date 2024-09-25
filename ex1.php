<?php
function pertenceFibonacci($numero) {
    $a = 0;
    $b = 1;

    while ($a <= $numero) {
        if ($a == $numero) {
            return true;
        }
        $temp = $a;
        $a = $b;
        $b = $temp + $b;
    }

    return false;
}

// Entrada do usuário
$numero = intval(readline("Informe um número: "));

// Verifica se o número pertence à sequência de Fibonacci
if (pertenceFibonacci($numero)) {
    echo "$numero pertence à sequência de Fibonacci.\n";
} else {
    echo "$numero não pertence à sequência de Fibonacci.\n";
}
?>
