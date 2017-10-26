<?php
require 'database.php';
require 'fetch_tasks.php';


//Prints message if user entered task correctly/wrong
function check_if_task_is_entered()
{
    if(isset($_POST["submit_task"]))
    {  
        if (($_POST["task_title"] == ' ') || ($_POST["added_by"] == ' '))
        {
            echo '<p id="error_message_text">' . "Oops, something went wrong! Did you enter a task? Try again." . '</p>';
            exit();
        } 
        
        elseif (isset($_POST["task_title"]) && isset($_POST["added_by"]))
        {
            echo '<p>' . "Nice, you added a new task!" . '</p>';
        }
    }
}


//Saves task title + created by into database
function submit_task($pdo)
{   
        
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
}
