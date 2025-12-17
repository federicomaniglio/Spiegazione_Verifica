<?php
// Includo la classe Database per la connessione al DB
require_once "Database.php";

// Verifico che ci siano dati POST inviati dal form
if (!empty($_POST) && isset($_POST)) {
    // Ottengo l'istanza del DB e la connessione PDO
    $pdo = Database::getInstance()->getConnection();

    // Preparo la query di INSERT con parametri bindati per sicurezza
    $stmt = $pdo->prepare("INSERT INTO dipendenti(nome, cognome, ruolo_id, data_assunzione) VALUES (:nome, :cognome, :ruolo_id, :data_assunzione)");

    // Eseguo la query passando i valori del form come array associativo 
    $stmt->execute([
        "nome" => $_POST["nome"],
        "cognome" => $_POST["cognome"],
        "ruolo_id" => $_POST["ruolo_id"],
        "data_assunzione" => $_POST["data_assunzione"]
    ]);
}

// Redirect alla pagina principale dopo l'inserimento
header("Location: esercizio1.php");