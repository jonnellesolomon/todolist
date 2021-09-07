<?php
    include("connection.php");
    $i = 1;
    $sql = "SELECT id, task FROM tasks";
    $result = $db->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) { ?>
                
                <tr>
                <td class="task">
                    <?php echo $i . "."; ?>
                    <?php echo $row['task'] ?>
                </td>
                <td class="edit">
                    <a class="editbtn" href="editpage.php?edit_task=<?php echo $row['id']; ?>">Edit</a>
                    <a class="deletebtn" href="delete.php?del_task=<?php echo $row['id']; ?>">Delete</a>
                </td>
                </tr><?php $i++;
        }
        } else {
        echo "0 results";
    }
?>