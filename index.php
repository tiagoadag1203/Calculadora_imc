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
        <form action="dados.php" method="POST">
            <label for="altura">Nome</label>
            <input type="text" id="nome" name="nome">
            <label for="altura">Altura (metros)</label>
            <input type="text" id="altura" name="altura">
            <label for="peso">Peso (Kg)</label>
            <input type="text" id="peso" name="peso">
            <input type="submit" name="submit" value="Calcular" class="btn">
        </form>

        <?php
        if (isset($_GET['imc']) && isset($_GET['resultado'])) {
            $imc = $_GET['imc'];
            $resultado = $_GET['resultado'];
        } else {
            $imc = null;
            $resultado = null;
        }
        ?>

        <h3>IMC:</h3>
        <?= $imc; ?>
        <h3>Situação:</h3>
        <?= $resultado; ?>
    </div>
</body>

</html>