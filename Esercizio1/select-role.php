<?php
// Includo la classe Database per la connessione al DB
require_once "Database.php";
// Ottengo l'istanza del DB e la connessione PDO
$pdo = Database::getInstance()->getConnection();

// Controllo se è stata fatta una richiesta POST non valida
if (!empty($_POST) && !isset($_POST["button"])) {
    header("Location: esercizio1.php");
}

// Preparo e eseguo query per selezionare dipendenti con ruolo specifico
$stmt = $pdo->prepare("SELECT * FROM dipendenti WHERE ruolo_id = :ruolo_id");
$stmt->execute(["ruolo_id" => $_POST["ruolo_id"]]);
// Recupero tutti i risultati in un array
$dipendentiRuoli = $stmt->fetchAll();

// Se non ci sono risultati, redirect alla pagina principale
if (!$dipendentiRuoli) {
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
<h1><?= $_POST["ruolo_id"] ?></h1>
<?php
// Ciclo l'array dei dipendenti e stampo i dati di ognuno
foreach ($dipendentiRuoli as $dipendente) {
    ?>

    <span><p><?= $dipendente["id"] . "\t" ?></p></span>
    <span><p><?= $dipendente["nome"] . "\t" ?></p></span>
    <span><p><?= $dipendente["cognome"] . "\t" ?></p></span>
    <span><p><?= $dipendente["ruolo_id"] . "\t" ?></p></span>
    <span><p><?= $dipendente["data_assunzione"] . "\n" ?></p></span>
    <hr>
    <?php
}
?>

</body>
</html>
