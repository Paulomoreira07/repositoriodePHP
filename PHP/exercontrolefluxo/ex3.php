\\Faça um programa em PHP que mostre na tela do navegador a tabuada de 6 usando o comando while.
<?php
    $n = 6;
    $contabilizador = 0;
    while ($contabilizador <= 10){
        echo ($n * $contabilizador);
        $contabilizador ++;
    }
?>