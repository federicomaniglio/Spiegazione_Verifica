<?php

/**
 * Classe Database che implementa il pattern Singleton per la gestione della connessione al database
 */
class Database
{
    // Istanza statica della classe (pattern Singleton)
    private static $instance = null;

    // Oggetto PDO per la connessione al database
    private $pdo;

    /**
     * Costruttore privato che inizializza la connessione PDO
     * Viene chiamato solo una volta quando si crea l'istanza
     */
    private function __construct()
    {
        // Creazione della connessione al database MySQL usando PDO
        $this->pdo = new PDO("mysql:host=db;dbname=MANIGLIO_azienda", "root", "");
    }

    /**
     * Metodo statico che restituisce l'istanza unica della classe
     * Se non esiste, la crea (pattern Singleton)
     * @return Database istanza della classe
     */
    public static function getInstance()
    {
        if (self::$instance === null)
            self::$instance = new self();
        return self::$instance;
    }

    /**
     * Restituisce l'oggetto PDO per eseguire query sul database
     * @return PDO oggetto di connessione al database
     */
    public function getConnection()
    {
        return $this->pdo;
    }
}