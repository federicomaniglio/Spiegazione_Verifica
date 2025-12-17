<?php
// Includo la classe Database per la connessione al DB
require_once "Database.php";

// Verifico che ci siano dati POST inviati dal form
if (!empty($_POST) && isset($_POST)) {
    // Ottengo l'istanza del DB e la connessione PDO usando il pattern Singleton
    $pdo = Database::getInstance()->getConnection();

    // Preparo la query di DELETE con parametro bindato per sicurezza
    $stmt = $pdo->prepare("DELETE FROM dipendenti WHERE id = :id");

    // Eseguo la query passando l'ID da eliminare
    $stmt->execute(["id" => $_POST["id"]]);
}

// Redirect alla pagina principale dopo l'eliminazione
header("Location: esercizio1.php");