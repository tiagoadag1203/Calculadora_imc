<?php
if (isset($_POST['submit'])){

include_once ('config.php');

$nome = $nome;
$imc = $imc;
$resultado = $resultado;

$result = mysqli_query($conexao, "INSERT INTO resultados(nome,imc,situacao) VALUES ('$nome','$imc','$resultado')");
}