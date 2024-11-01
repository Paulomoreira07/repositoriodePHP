\\Faça um programa em PHP que calcule a média de um aluno a partir de quatro notas e verifique se ele foi aprovado ou não.
\\Caso ele seja aprovado ou não, mostre a mensagem na tela do navegador.
<?php
    $n1=4;
    $n2=4;
    $n3=8;
    $n4=6;

    $media = $n1+$n2+$n3+$n4/4;

    if($media >= 6)
    {
        echo "Ele foi aprovado";
    }
    else
    {
        echo "nao foi aprovado";
    }
?>