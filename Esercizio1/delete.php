<?php
require_once "Database.php";

if(!empty($_POST) && isset($_POST)){
    $pdo = Database::getInstance()->getConnection();
    $stmt = $pdo -> prepare("DELETE FROM dipendenti WHERE id = :id");
    $stmt ->execute(["id" => $_POST["id"]]);
}
header("Location: esercizio1.php");