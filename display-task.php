<?php
    include("connection.php");
    $i = 1;
    $sql = "SELECT id, task FROM tasks";
    $result = $db->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) { ?>
                <tr>
                <td class="id">
                    <?php echo $i; ?>
                </td>
                <td class="task">
                    <?php echo $row['task'] ?>
                </td>
                <td class="edit">
                    <a href="edit.php?edit_task=<?php echo $row['id']; ?>">Edit</a>
                </td>
                <td class="delete">
                    <a href="delete.php?del_task=<?php echo $row['id']; ?>">Delete</a>
                </td>
                </tr><?php $i++;
        }
        } else {
        echo "0 results";
    }
?>