<?php
require 'database.php';

//Prints message if user entered task correctly/wrong
function show_submit_message()
{
    //Shows success-message when task is entered
    if (isset($_GET["success"]))
        {
            echo '<p id="submit_message">' . "Nice, you added a new task!" . '</p>';
        }

}
