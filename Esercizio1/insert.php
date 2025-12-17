<?php
require_once "Database.php";

if(!empty($_POST) && isset($_POST) ){
    $pdo = Database::getInstance()->getConnection();
    $stmt = $pdo -> prepare("INSERT INTO dipendenti(nome, cognome, ruolo_id, data_assunzione) VALUES (:nome, :cognome, :ruolo_id, :data_assunzione)");
    $stmt->execute([
        "nome" => $_POST["nome"],
        "cognome" => $_POST["cognome"],
        "ruolo_id" => $_POST["ruolo_id"],
        "data_assunzione" => $_POST["data_assunzione"]
    ]);
}
header("Location: esercizio1.php");