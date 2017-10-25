<?php
require 'database.php';
require 'fetch_tasks.php';


function check_if_task_is_entered()
{
    if(isset($_POST["submit_task"]))
    {  
        if (empty($_POST["task_title"]) || empty($_POST["added_by"]))
        {
            echo '<p>' . "You didn't add the task correctly!" . '</p>';
        } 
        
        elseif (isset($_POST["task_title"]) && isset($_POST["added_by"]))
        {
            echo '<p>' . "Nice, you added a new task!" . '</p>';
        }
    }
}


function submit_task($pdo)
{   
        
    if(isset($_POST["submit_task"]))
    {    
        $save_task = $pdo->prepare(
            "INSERT INTO todos (title, createdBy) 
            VALUES (:title, :createdBy)");

        $save_task->execute(array(
            ":title"     => $_POST["task_title"],
            ":createdBy"     => $_POST["added_by"], 
        ));
    }
}
