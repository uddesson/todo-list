<?php 
require 'database.php';

if (isset($_POST["complete_id"]))
    {
        $complete_stm = $pdo->prepare("UPDATE todos SET completed = 1 WHERE id = {$_POST["complete_id"]}");
        $complete_stm->execute();
    }

header('Location: index.php');


