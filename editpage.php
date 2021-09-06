<form method="POST">
  <input type="text" name="task"  placeholder="Update task" Required>
  <input type="submit" name="update" value="Update">
</form>

<?php 
    include ("connection.php");
    $id = $_GET['edit_task']; // get id through query string
    $qry = mysqli_query($db,"SELECT * FROM tasks WHERE id='$id'"); // select query
    $data = mysqli_fetch_array($qry); // fetch data

    if(isset($_POST['update'])) // when click on Update button
    {
        $task = $_POST['task'];
        $edit = mysqli_query($db,"UPDATE tasks SET task='$task' WHERE id='$id'");
        if($edit){
            mysqli_close($db); // Close connection
            header("location:index.php"); // redirects to all records page
            exit;
        } 	
    }
?>


