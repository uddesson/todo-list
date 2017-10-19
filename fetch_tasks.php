<?php
include 'database.php';

//testar
$statement = $pdo->prepare
    (
        "SELECT title FROM todos"
    );

$statement->execute();

$tasks = $statement->fetchAll();

//var_dump($todos);