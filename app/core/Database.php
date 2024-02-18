<?php

namespace App\core;

use PDO;
use PDOException;

class Database
{
    private static $instance;
    private $host = "localhost";
    private $username = "root";
    private $password = "mysql";
    private $dbname = "autosend";
    public $conn;

    private function __construct()
    {
        try {
            // Đặt charset trong DSN
            $dsn = "mysql:host={$this->host};dbname={$this->dbname};charset=utf8";
            $this->conn = new PDO($dsn, $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }

    public static function getInstance()
    {
        if (!self::$instance) {
            self::$instance = new Database();
        }
        return self::$instance;
    }

    public function getConnection()
    {
        return $this->conn;
    }
}
