<?php

$altura = $_POST['altura'];
$peso = $_POST['peso'];


function imc ($altura, $peso){
    $imc = $peso / $altura ** 2;
    $imc_formatado = number_format($imc, 2);
    return $imc_formatado;
}

$imc = imc ($altura, $peso);


if ($imc < 18.5) {
    $resultado2 = "Abaixo do peso";
}
else if ($imc >= 18.5 && $imc <= 24.9) {
    $resultado2 = "Peso normal";
}
else if ($imc >= 15 && $imc <= 29.9) {
    $resultado2 = "Excesso de peso";
}
else if ($imc >= 30 && $imc <= 34.9) {
    $resultado2 = "Obesidade classe I";
}
else if ($imc >= 35 && $imc <= 39.9) {
    $resultado2 = "Obesidade classe II";
}
else {
    $resultado2 = "Obesidade classe III";
}

header("Location: index.php?imc=$imc&resultado2=$resultado2");
exit();

?>

