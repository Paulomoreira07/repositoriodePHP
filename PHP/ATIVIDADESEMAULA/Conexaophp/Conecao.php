<?php
$servidor = "loocalhost"; // Nome do servidor do sgbd
$usuario = "root";  // Nome do usuario do sgbd
$senha = ""; //senha do usuario do sgbd


// criar coneção com o banco de dados
$conexao = new mysqli($servidor, $usuario, $senha); // orientado a objeto
//ou
$conexao = new mysqli_connect($servidor, $usuario, $senha); // estruturado

mysqli_select_db($conexao, "meubanco");// nome do seu banco de dados


//checar se a coneção foi realizada com sucesso
if($conexao ->connect_error){
    die("Conexao falhou".$conexao->connect_error);
}
echo "conexao realizada com sucesso";

?>

// codigo a corrigir
