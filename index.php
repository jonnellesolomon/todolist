<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Todo List by Jonelle</title>
</head>
<body>
    <div class="header">
        <h2>Todo List</h2>

        <form method="POST" action="add.php">
            <input type="text" name="task" class="task_input" required/>
            <button type="submit" class="task_btn" name="submit">Add</button> <br>
        </form>
        
        <table>
            <thread>
                <tr>
                    <th>#</th>
                    <th>Task</th>
                    <th>Action</th>
                </tr>
            </thread>

            <tbody>
                <?php 
                    include("display-task.php");
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>