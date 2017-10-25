<?php
require_once 'database.php';
require_once 'fetch_tasks.php';


if (isset($_POST["delete_id"]))
{
    $delete_task = $pdo->prepare
        (
            "DELETE FROM todos WHERE id = :id"
        );
    $delete_task->execute( array (":id"   => $_POST["delete_id"])); 
    
}

header('Location: index.php');
