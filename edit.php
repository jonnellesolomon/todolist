<?php
    include_once 'connection.php';

    if(count($_POST)>0) {
        mysqli_query($db,"UPDATE tasks set id='" . $_POST['id'] . "', task='" . $_POST['task'] . "' WHERE id='" . $_POST['id'] . "'");
        $message = "Record Modified Successfully";
    }
        $result = mysqli_query($db,"SELECT * FROM tasks WHERE id='" . $_GET['id'] . "'");
        $row= mysqli_fetch_array($result);
?>

<html>
<head>
<title>Update Employee Data</title>
</head>
<body>
<form name="frmUser" method="post" action="">
<div><?php if(isset($message)) { echo $message; } ?>
</div>
<div style="padding-bottom:5px;">
<a href="retrieve.php">Employee List</a>
</div>
Username: <br>
<input type="hidden" name="userid" class="txtField" value="<?php echo $row['userid']; ?>">
<input type="text" name="userid"  value="<?php echo $row['userid']; ?>">
<br>
First Name: <br>
<input type="text" name="first_name" class="txtField" value="<?php echo $row['first_name']; ?>">
<br>
Last Name :<br>
<input type="text" name="last_name" class="txtField" value="<?php echo $row['last_name']; ?>">
<br>
City:<br>
<input type="text" name="city_name" class="txtField" value="<?php echo $row['city_name']; ?>">
<br>
Email:<br>
<input type="text" name="email" class="txtField" value="<?php echo $row['email']; ?>">
<br>
<input type="submit" name="submit" value="Submit" class="buttom">

</form>
</body>
</html>