\\Faça um programa em PHP que verifique um número e mostre na tela do navegador se ele é par ou impar.
<?php
    echo ("digite um numero:");
    $num = (int) fgets(STDIN);

    if ( $num % 2 == 0){
        echo ("é par");
    }
    else{
        echo ("é impar");
    }
?>