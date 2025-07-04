<?php
include_once "./src/utils/Calculator.php";

$calculator = new \Src\utils\Calculator();
$result = null;
$chiffre1 = null;
$chiffre2 = null;
// Vérifie si les données du formulaire sont bien envoyées
var_dump($_POST);
if (
    isset($_POST['number1'], $_POST['number2'], $_POST['symbol']) &&
    is_numeric($_POST['number1']) &&
    is_numeric($_POST['number2'])
) {
    $chiffre1 = floatval($_POST['number1']);
    $chiffre2 = floatval($_POST['number2']);
    $symbol = $_POST['symbol'];

    $result = $calculator->makeCalc($chiffre1, $symbol, $chiffre2);

}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Calculatrice</title>
</head>
<body>

<h2>Bienvenu !</h2>

<?php if ($result !== null): ?>
    <p><strong>Résultat :</strong> <?= htmlspecialchars($result) ?></p>
<?php endif; ?>

<form method="post">

    <input type="number" name="number1" placeholder="Nombre 1">

    <input type="number" name="number2" placeholder="Nombre 2">

    <div>
        <label><input type="radio" name="symbol" value="+"> +</label>
        <label><input type="radio" name="symbol" value="-"> -</label>
        <label><input type="radio" name="symbol" value="*"> x</label>
        <label><input type="radio" name="symbol" value="/"> /</label>
    </div>
    <button type="submit">=</button>
</form>

</body>
</html>
