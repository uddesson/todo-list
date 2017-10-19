<?php
include 'database.php';

$statement = $pdo->prepare
    (
        "INSERT INTO todos (title, createdBy) 
        VALUES (:title, :createdBy)"
    );

//Obs om användaren inte har fyllt i något så finns heller inget $_POST["title"] - ger felmeddeland. Lös!
$statement->execute(array(
    ":title"     => $_POST["title"],
    ":createdBy"     => $_POST["name"]
));
