<?php
// Includo la classe Database per la connessione al database
require_once "Database.php";

// Verifico che siano stati inviati dati tramite POST
if (!empty($_POST) && isset($_POST)) {
    // Ottengo l'istanza del database e la connessione PDO
    $pdo = Database::getInstance()->getConnection();

    // Preparo la query di UPDATE con prepared statement per prevenire SQL injection
    $stmt = $pdo->prepare("UPDATE dipendenti SET nome=:nome, cognome=:cognome,ruolo_id=:ruolo_id,data_assunzione=:data_assunzione WHERE id = :id");

    // Eseguo la query passando un array con i parametri
    $stmt->execute([
        "nome" => $_POST["nome"],
        "cognome" => $_POST["cognome"],
        "ruolo_id" => $_POST["ruolo_id"],
        "data_assunzione" => $_POST["data_assunzione"],
        "id" => $_POST["id"]
    ]);

}
// Reindirizzo alla pagina principale
header("Location: esercizio1.php");