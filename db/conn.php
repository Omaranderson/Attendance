<?php
    // $host = '127.0.0.1';
    // $db = 'attendance_db';
    // $user = 'root';
    // $pass= '';
    // $charset = 'utf8mb4';

    $host = 'remotemysql.com';
    $db = 'Jc4Cc2q4gX';
    $user = 'Jc4Cc2q4gX';
    $pass= 'nhqMxbQDsK';
    $charset = 'utf8mb4';

    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";

    try
    {
        $pdo = new PDO($dsn, $user, $pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);        
    }
    catch(PDOException $e)
    {
        throw new PDOException($e->getmessage());
    }

    require_once 'crud.php';
    $crud = new crud($pdo);
?>