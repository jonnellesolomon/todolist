<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style/style.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <title>Todolist by Jonelle</title>
</head>
<body>
    <div class="add">
        <h2>Todolist</h2>

        <form method="POST" action="add.php">
            <input type="text" name="task" class="task_input" placeholder="type here" required/>
            <button type="submit" class="task_btn" name="submit">Add</button> <br>
        </form>
        
        <table>
            <tbody>
                <?php 
                    include("display-task.php");
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>