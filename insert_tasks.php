<?php
require 'database.php';

//Inserts title and "users" name to database
//Task ID is automaticly generated in database and "completed" is by default set to 0 ..
//.. and doesn't have to be entered by the user
if(isset($_POST["submit_task"]) && isset($_POST["task_title"]) && isset($_POST["created_by"]))
    {    
        $save_task = $pdo->prepare(
            "INSERT INTO todos (title, createdBy) 
            VALUES (:title, :createdBy)");
    
        $save_task->execute(array(
            ":title"     => $_POST["task_title"],
            ":createdBy"     => $_POST["created_by"], 
        ));
    
    header('Location: index.php?success=message');

    } 