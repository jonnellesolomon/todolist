<?php 
    include("connection.php");
        if (isset($_POST['submit'])) {
            $task = $_POST['task'];

            mysqli_query($db, "INSERT INTO tasks (task) VALUES ('$task')");
            header('location: index.php');
        }
?>