<?php
include_once "./src/utils/Calculator.php";

$calculator = new \Src\utils\Calculator();
$result = null;
$chiffre1 = null;
$chiffre2 = null;
$symbol = null;

if (array_key_exists('reset', $_POST)) {

} else {
    if (array_key_exists('number1', $_POST) && is_numeric($_POST['number1']) &&
        array_key_exists('number2', $_POST) && is_numeric($_POST['number2']) &&
        array_key_exists('symbol', $_POST)) {

        $chiffre1 = floatval($_POST['number1']);
        $chiffre2 = floatval($_POST['number2']);
        $symbol = $_POST['symbol'];

        $result = $calculator->makeCalc($chiffre1, $symbol, $chiffre2);
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Calculatrice</title>
</head>
<body>

<h2>Bienvenue !</h2>

<?php
if ($result !== null):
    ?>
    <p>Résultat :<?= htmlspecialchars($result) ?></p>
<?php endif; ?>

<form method="post">
    <input type="number" name="number1" placeholder="Nombre 1" step="any"
           value="<?= ($result !== null) ? htmlspecialchars($result) : '' ?>">

    <input type="number" name="number2" placeholder="Nombre 2" step="any">

    <div>
        <label><input type="radio" name="symbol" value="+"> +</label>
        <label><input type="radio" name="symbol" value="-"> -</label>
        <label><input type="radio" name="symbol" value="*"> x</label>
        <label><input type="radio" name="symbol" value="/"> /</label>
    </div>
    <button type="submit">=</button>
</form>

<form method="post">
    <button type="submit" name="reset">Réinitialiser</button>
</form>

</body>
</html>