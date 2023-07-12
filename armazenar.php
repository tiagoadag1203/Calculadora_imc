<?php
if (isset($_POST['submit'])){

include_once ('config.php');
include_once ('imc.php');

$nome = $nome;
$imc = $imc;
$resultado = $resultado2;

$result = mysqli_query($conexao, "INSERT INTO altura(nome,imc,situacao) VALUES ('$nome','$imc','$resultado')");
}