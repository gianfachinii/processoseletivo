<?php
function contarLetraA($string) {
    
    $stringMinuscula = strtolower($string);
    
    
    $qtd = substr_count($stringMinuscula, 'a');
    
    if ($qtd > 0) {
        echo "A letra 'a' aparece $qtd vezes na string.\n";
    } else {
        echo "A letra 'a' não aparece na string.\n";
    }
}


$string = readline("Informe uma string: ");
contarLetraA($string);
?>
