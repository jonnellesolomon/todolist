<?php
    include "connection.php"; 
    
    if (isset($_GET['edit_task'])) {
        $id = $_GET['edit_task'];
        mysqli_query($db, "UPDATE tasks SET task WHERE $id=id");
        header('location: index.php');
    }
?>