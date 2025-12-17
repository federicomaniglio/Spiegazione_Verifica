<?php

class Database
{
    private static $instance = null;
    private $pdo;

    private function __construct(){
        $this->pdo = new PDO("mysql:host=db;dbname=MANIGLIO_azienda", "root", "");
    }

    public static function getInstance(){
        if(self::$instance === null)
            self::$instance = new self();
        return self::$instance;
    }

    public function getConnection(){
        return $this->pdo;
    }

}