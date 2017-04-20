<?php
    $dsn = 'mysql:host=sql2.njit.edu;dbname=ch05_ex1_sol';
    $username = 'sg772';
    $password = '941992Samog';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('../errors/database_error.php');
        exit();
    }
?>
