<?php

require "connection.php";

$sql = "SELECT * FROM `info`";
$table = $conn->query($sql);
$content = $table->fetch_assoc();


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Admin</title>
</head>
<body>
<div class="logheader">
    <img src="image/profile.jpg" alt="" class="logo">
</div>
<div class="adminrecords">
<h3>ADMIN</h3>
    <table>
        <thead>
            <tr>
                <th>Email</th>
                <th>Username</th>
                <th>Password</th>
                <th>Operation</th>
            </tr>
        </thead>
        <tbody>
            

                <?php if($table->num_rows){?>

                <?php do{?>
                    <tr>
                        <td><?php echo $content['email']?></td>
                        <td><?php echo $content['username']?></td>
                        <td><?php echo $content['password']?></td>
                        <td>
                        <form action="delete.php" method="post">
                            <a href="edit.php?id= <?php echo $content['id']?>" class="editlink" id="editlink" >EDIT</a>
                            <button type="submit" name="delete" class="deletebutton" id="deletebutton"> DELETE</button>
                            <input type="hidden" name="erase" value="<?php echo $content['id']?>">
                        </form>
                        </td>
                    </tr>
                <?php }while($content = $table->fetch_assoc())?>
            
                    <?php }?>
        </tbody>
    </table>

    <a href="index.php" class="logoutadmin">LOG OUT</a>
    </div>


<script src="main.js"></script>
</body>
</html>