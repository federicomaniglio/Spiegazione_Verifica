<?php
require_once "Database.php";
$pdo = Database::getInstance()->getConnection();

$stmt = $pdo->prepare("SELECT * FROM dipendenti");
$stmt->execute();
$dipendenti = $stmt->fetchAll();


if (!$dipendenti) {
    header("Location: esercizio1.php");
}


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Select All</title>
</head>
<body>
<?php
foreach ($dipendenti as $dipendente) {
    ?>

    <p><?= $dipendente["id"] . "\t" ?></p>
    <p><?= $dipendente["nome"] . "\t" ?></p>
    <p><?= $dipendente["cognome"] . "\t" ?></p>
    <p><?= $dipendente["ruolo_id"] . "\t" ?></p>
    <p><?= $dipendente["data_assunzione"] . "\t" ?></p>
    <hr>
    <?php
}
?>

</body>
</html>

