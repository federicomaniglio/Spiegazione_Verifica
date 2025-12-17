<?php
// Includo la classe Database per la connessione al DB
require_once "Database.php";
// Ottengo l'istanza del DB e la connessione PDO
$pdo = Database::getInstance()->getConnection();

// Preparo e eseguo query per selezionare tutti i dipendenti
$stmt = $pdo->prepare("SELECT * FROM dipendenti");
$stmt->execute();
// Recupero tutti i risultati in un array
$dipendenti = $stmt->fetchAll();

// Se non ci sono risultati, redirect alla pagina principale
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
// Ciclo l'array dei dipendenti e stampo i dati di ognuno 
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