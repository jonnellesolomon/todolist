<form method="POST">
    <input type="text" name="task" class="task_input" required/>
    <button type="submit" class="task_btn" name="submit">Update</button> <br>
</form>

<?php
    $sql = "SELECT id, task FROM tasks WHERE id=$link";
    $link = $_GET['edit_task'];
    echo $link;
    if (isset($_GET[$link])) {
        echo $_GET[$link];
    }
?>

