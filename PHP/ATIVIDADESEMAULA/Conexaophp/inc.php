<?php
include "conecta->banco.inc";
// guarda na variavel o resultado na sql


$resultado = mysqli_query($conexao, "SELECT + from alunos");
if($resultado)
    // mostra o numero de registros da tabela
    echo "<br>A tabela possui: ".mysqli_num_rows($resultado);
    mysqli_free_result($resultado);//libera o espaco da memoria apos uma consulta

mysqli_close($conexao);
?>
