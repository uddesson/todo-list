<?php
require 'database.php';

if (isset($_POST["delete_id"]))
    {
        $delete_stm = $pdo->prepare("DELETE FROM todos WHERE id = {$_POST["delete_id"]}");
        $delete_stm->execute();   
    }

header('Location: index.php');
