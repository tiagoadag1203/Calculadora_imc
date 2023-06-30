<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Calculadora IMC</title>
</head>

<body>
    <div class="calculadora">
        <h1>Calcular IMC</h1>
        <form action="imc.php" method="post">
            <label for="altura">Altura (metros)</label>
            <input type="text" id="altura" name="altura">
            <label for="peso">Peso (Kg)</label>
            <input type="text" id="peso" name="peso">
            <input type="submit" value="Calcular" class="btn">
        </form>
        <?php
        if (isset($_GET['imc']) && isset($_GET['resultado2'])) {
            $imc = $_GET['imc'];
            $resultado2 = $_GET['resultado2'];
        } else {
            $imc = null;
            $resultado2 = null;
        }
        ?>

        <h3>IMC:</h3>
        <?= $imc; ?>
        <h3>Situação:</h3>
        <?= $resultado2; ?>
    </div>
</body>

</html>