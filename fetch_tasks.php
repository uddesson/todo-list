<?php
require 'database.php';

$fetch_tasks = $pdo->prepare
    (
        "SELECT title, createdBy, id FROM todos
        ORDER by id DESC"
    );

$fetch_tasks->execute();
$tasks = $fetch_tasks->fetchAll(PDO::FETCH_ASSOC);
