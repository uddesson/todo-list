<?php
require 'database.php';

if(isset($_POST["submit_task"]))
    {    
        $save_task = $pdo->prepare(
            "INSERT INTO todos (title, createdBy) 
            VALUES (:title, :createdBy)");
        
//Task ID is automaticly generated in database and "completed" is by default set to 0 ..
//.. and doesn't have to be entered by the user
    
        $save_task->execute(array(
            ":title"     => $_POST["task_title"],
            ":createdBy"     => $_POST["added_by"], 
        ));
    }

header('Location: index.php');


