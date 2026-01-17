<?php

$dotenv = parse_ini_file(__DIR__ . '/../.env');

$host = $dotenv['DB_HOST'];
$db   = $dotenv['DB_NAME'];
$user = $dotenv['DB_USER'];
$pass = $dotenv['DB_PASS'];
$port = $dotenv['DB_PORT'] ;

return [
    'driver'  => 'pgsql',
    'host'    => $host,
    'dbname'  => $db,
    'user'    => $user,
    'port'    =>$port,
    'pass'    => $pass,
    'charset' => 'utf8',
    'options' => [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
        
    ]
];

?>