<?php
require 'database.php';

//Removes selected post from database
if (isset($_POST["delete_id"]))
    {
        $delete_stm = $pdo->prepare("DELETE FROM todos WHERE id = {$_POST["delete_id"]}");
        $delete_stm->execute();   
    }

//Returns to index.php
header('Location: index.php');
