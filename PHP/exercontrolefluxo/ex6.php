\\Faça um programa em PHP que leia o conteúdo de um vetor com 10 elementos e mostre esses elementos na tela do navegador usando o comando foreach.
<?php
$vetor = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
foreach ($vetor as $valor){
    echo "$valor";
}
?>