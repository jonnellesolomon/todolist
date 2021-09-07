<?php 
    include ("connection.php");
    $task = $_GET['edit_task'];
?>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="style/style.css">
    <title>Update Task</title>
</head>
    <h2 class="update_title">update your task</h2>
    <form class="update" method="POST">
        <input class="update_i" type="text" name="task"  placeholder="update #<?php echo $task ?>" Required>
        <input class="update_b" type="submit" name="update" value="Update">
    </form>
    <a class="cancel" href="index.php">Cancel</a>

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

</html>


