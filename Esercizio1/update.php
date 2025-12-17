<?php
require_once "Database.php";

if(!empty($_POST) && isset($_POST) ){
    $pdo = Database::getInstance()->getConnection();
    $stmt = $pdo -> prepare("UPDATE dipendenti SET nome=:nome, cognome=:cognome,ruolo_id=:ruolo_id,data_assunzione=:data_assunzione WHERE id = :id");
    $stmt->execute([
        "nome" => $_POST["nome"],
        "cognome" => $_POST["cognome"],
        "ruolo_id" => $_POST["ruolo_id"],
        "data_assunzione" => $_POST["data_assunzione"],
        "id" => $_POST["id"]
    ]);

}
header("Location: esercizio1.php");