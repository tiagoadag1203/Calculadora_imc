<?php

function imc ($altura, $peso){
    $imc = $peso / $altura ** 2;
    $imc_formatado = number_format($imc, 2);
    return $imc_formatado;
}

$imc = imc ($altura, $peso);


if ($imc < 18.5) {
    $resultado = "Abaixo do peso";
}
else if ($imc >= 18.5 && $imc <= 24.9) {
    $resultado = "Peso normal";
}
else if ($imc >= 15 && $imc <= 29.9) {
    $resultado = "Excesso de peso";
}
else if ($imc >= 30 && $imc <= 34.9) {
    $resultado = "Obesidade classe I";
}
else if ($imc >= 35 && $imc <= 39.9) {
    $resultado = "Obesidade classe II";
}
else {
    $resultado = "Obesidade classe III";
}

include ('armazenar.php');

header("Location: index.php?imc=$imc&resultado=$resultado");
exit();

?>

