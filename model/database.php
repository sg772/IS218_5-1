<?php
    $dsn = 'mysql:host=localhost;dbname=my_guitar_shop1';
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
