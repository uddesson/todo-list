<?php
include 'database.php';

//testar
$statement = $pdo->prepare
    (
        "SELECT title, createdBy FROM todos"
    );

$statement->execute();

$tasks = $statement->fetchAll();
