<?php
namespace app\Core;

use PDO;
use PDOException;

class Database
{
    private static ?PDO $instance = null;

    private function __construct() {}
    private function __clone() {}
    public function __wakeup() {
        throw new Exception("Cannot unserialize singleton");
    }

    public static function getInstance(): PDO
    {
        if (self::$instance === null) {
            $config = require_once __DIR__ . '/../../config/database.php';
        
            $host = $config['host'];
            $port = $config['port'] ;
            $dbname = $config['dbname'];
            $user = $config['user'];
            $password = $config['pass'];

            $dsn = "pgsql:host=$host;port=$port;dbname=$dbname";

            try {
                self::$instance = new PDO($dsn, $user, $password,$config['options']);
            } catch (PDOException $e) {
                die(" Erreur de connexion : " . $e->getMessage());
            }
        }

        return self::$instance;
    }
}
