\\Faça um programa em PHP que mostre na tela do navegador a tabuada de 7 usando o comando do...while.
<?php
$n = 7;
$contabilizador = 0;
do{
    echo ($n * $contabilizador);
    $contabilizador ++;
}
while ($contabilizador <= 10);
?>